# Discoverly

A web application for discovering local places, activities, and events. Built with Flask (Python) backend and JavaScript frontend.

## Features

- Browse local places (restaurants, cafés, museums, parks, activities)
- User authentication (login/logout with sessions)
- Leave and view reviews for places
- Dynamic place pages with maps
- Curated trip itineraries

## Tech Stack

**Backend:**
- Python Flask
- MySQL Database
- Flask-CORS for cross-origin requests

**Frontend:**
- HTML/CSS
- JavaScript
- Leaflet.js for maps

## Prerequisites

- Python 3.x
- MySQL
- pip (Python package manager)

## Installation

1. **Clone the repository**
```bash
git clone https://github.com/Stefanijaaaa/discoverly.git
cd discoverly
```

2. **Set up the database**

Log into MySQL:
```bash
mysql -u root -p
```

Run the database setup files:
```sql
source /path/to/database/dbsetup.sql
source /path/to/database/populate.sql
```

3. **Install Python dependencies**
```bash
pip install flask flask-cors mysql-connector-python python-dotenv
```

4. **Configure environment variables**

Create a `.env` file in the project root:
```
DB_PASSWORD=your_mysql_password
SECRET_KEY=your_secret_key_here
```

5. **Run the Flask application**
```bash
python app.py
```

The API will run on `http://127.0.0.1:5000`

6. **Open the frontend**

Open `page1.html` in your browser (or use Live Server in VS Code).

Make sure it's running on `http://127.0.0.1:5500` for CORS to work properly.

## Test Account

**Email:** test@example.com  
**Password:** test123

## API Endpoints

### Places
- `GET /api/places/<place_id>` - Get details for a specific place

### Authentication
- `POST /login` - Login with email and password
- `POST /api/auth/logout` - Logout current user
- `GET /api/auth/check` - Check if user is logged in

### Reviews
- `POST /api/reviews` - Create a new review (requires authentication)
- `GET /api/reviews/<place_id>` - Get all reviews for a place

## Project Structure

```
discoverly/
├── app.py              # Main Flask application
├── database.py         # Database connection
├── userlogin.py        # Login blueprint
├── database/
│   ├── dbsetup.sql     # Database schema
│   └── populate.sql    # Sample data
├── page1.html          # Main page
├── login.html          # Login page
├── about.html          # About page
└── pages-layout/
    └── page_layout.html # Dynamic place page template
```

## Things I'm working on

- Wishlist functionality (save/remove places)
- Delete reviews
- User profiles
- Route recommendations (based on wishlist)

## License

This project was created as a learning exercise.
