from flask import Blueprint, request, redirect, session, jsonify

userlogin = Blueprint('userlogin', __name__)

@userlogin.route('/login', methods=['POST'])
def login():
    email = request.form.get('email')
    password = request.form.get('password')
    if email == 'test@example.com' and password == 'test123':
        session['logged_in'] = True
        session['email'] = email
        return redirect("http://127.0.0.1:5500/page1.html")
    return "Invalid credentials", 401

@userlogin.route('/api/auth/logout', methods=['POST'])
def logout():
    session.clear()
    return jsonify({"logged_out": True}), 200
