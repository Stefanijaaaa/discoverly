from flask import Flask, jsonify, session, request
from flask_cors import CORS
from database import get_db_connection, close_connection
from userlogin import userlogin
import os
from dotenv import load_dotenv

load_dotenv()

app = Flask(__name__)
CORS(app, supports_credentials=True, origins=["http://127.0.0.1:5500"])

#getting one place by the id
@app.route('/api/places/<int:place_id>', methods=['GET'])
def get_place(place_id):
    connection = get_db_connection()
    if not connection:
        return jsonify({"error": "Database connection failed"}), 500
    try:
        cursor = connection.cursor(dictionary=True)
        cursor.execute("SELECT * FROM Place WHERE placeID = %s", (place_id,))
        place = cursor.fetchone()
        cursor.close()
        close_connection(connection)
        if place:
            return jsonify(place), 200
        else:
            return jsonify({"error": "Place not found"}), 404
    except Exception as e:
        return jsonify({"error": str(e)}), 500
    

app.register_blueprint(userlogin)
app.secret_key = os.getenv('SECRET_KEY')


@app.route('/api/auth/check')
def check_auth():
    if session.get('logged_in'):
        return jsonify({"logged_in": True, "email": session['email']}), 200
    return jsonify({"logged_in": False}), 401

#posting reviews
@app.route('/api/reviews', methods=['POST'])
def add_review():
    if not session.get('logged_in'):
        return jsonify({"error": "Not authenticated"}), 401

    data = request.json
    place_id = data.get('placeID')
    comment = data.get('comment')
    rating = data.get('rating', 5)

    if not place_id or not comment:
        return jsonify({"error": "Missing fields"}), 400

    connection = get_db_connection()
    try:
        cursor = connection.cursor(dictionary=True)

        cursor.execute(
            "SELECT userID FROM Users WHERE email = %s",
            (session['email'],)
        )
        user = cursor.fetchone()
        if not user:
            return jsonify({"error": "User not found"}), 404

        cursor.execute(
            "INSERT INTO Review (userID, placeID, comment, rating) VALUES (%s, %s, %s, %s)",
            (user['userID'], place_id, comment, rating)
        )
        connection.commit()
        return jsonify({"success": True}), 201

    except Exception as e:
        connection.rollback()
        return jsonify({"error": str(e)}), 500

    finally:
        cursor.close()
        close_connection(connection)

@app.route('/api/reviews/<int:place_id>', methods=['GET'])
def get_reviews(place_id):
    connection = get_db_connection()
    if not connection:
        return jsonify({"error": "Database connection failed"}), 500
    
    try:
        cursor = connection.cursor(dictionary=True)
        cursor.execute("""
            SELECT r.reviewID, r.comment, r.rating, r.created_at, u.email 
            FROM Review r 
            JOIN Users u ON r.userID = u.userID 
            WHERE r.placeID = %s 
            ORDER BY r.created_at DESC
        """, (place_id,))
        reviews = cursor.fetchall()
        cursor.close()
        close_connection(connection)
        return jsonify(reviews), 200
    except Exception as e:
        return jsonify({"error": str(e)}), 500


if __name__ == '__main__':
    app.run(debug=True, port=5000)

    


