<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Activities - Discoverly</title>
<link rel="stylesheet" href="../Style/activities.css">
</head>
<body>
<header>
<h1>Discoverly</h1>
<nav>
        <a href="../index.php">Home</a>
        <a href="about.php">About</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="user-profile.php">My Profile</a>
            <a href="../Scripts/logout.php" class="logout-btn">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
         
        <?php endif; ?>
    </nav>
</header>

<main>
<div class="page-title">
<h2>Activities & Events</h2>
<p>Discover what's happening around town</p>
</div>

<div class="search-section">
<input type="text" class="search-bar" placeholder="Search activities..." id="search-bar" onkeyup="search()">
</div>

<div class="categories" id="myBtnContainer">
<button class="category-btn active" onclick="filterSelection('all')">All</button>
<button class="category-btn" onclick="filterSelection('food')">Food & Drink</button>
<button class="category-btn" onclick="filterSelection('tours')">Tours</button>
<button class="category-btn" onclick="filterSelection('classes')">Classes</button>
<button class="category-btn" onclick="filterSelection('markets')">Markets</button>
<button class="category-btn" onclick="filterSelection('events')">Events</button>
<button class="category-btn" onclick="filterSelection('nightlife')">Nightlife</button>
</div>

<div class="activities-grid">
<a href="#" class="activity-card filterDiv markets show">
<img src="https://images.unsplash.com/photo-1490818387583-1baba5e638af?w=600" alt="Flea Market" class="activity-image">
<div class="activity-content">
<h3>Sunday Flea Market</h3>
<p>Every Sunday from 8 AM to 12 PM. Vintage treasures, handmade crafts, and local goods.</p>
<span class="activity-price free">FREE</span>
</div>
</a>


<a href="#" class="activity-card filterDiv tours show">
<img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=600" alt="Wine Tasting" class="activity-image">
<div class="activity-content">
<h3>Wine Cellar Tour</h3>
<p>Sample regional wines in historic underground cellars with an expert sommelier.</p>
<span class="activity-price">€25</span>
</div>
</a>

<a href="#" class="activity-card filterDiv activity show">
<img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600" alt="Food Tour" class="activity-image">
<div class="activity-content">
<h3>Local Food Walking Tour</h3>
<p>Taste authentic dishes at family-run restaurants and hidden local eateries.</p>
<span class="activity-price">€35</span>
</div>
</a>

<a href="#" class="activity-card filterDiv events show">
<img src="https://images.unsplash.com/photo-1540479859555-17af45c78602?w=600" alt="Dance Class" class="activity-image">
<div class="activity-content">
<h3>Dance Class at River Café</h3>
<p>Every Thursday at 7 PM. Swing dance lessons in a cozy café atmosphere.</p>
<span class="activity-price free">FREE</span>
</div>
</a>

<a href="#" class="activity-card filterDiv tours show">
<img src="https://images.unsplash.com/photo-1507035895480-2b3156c31fc8?w=600" alt="Bike Tour" class="activity-image">
<div class="activity-content">
<h3>Riverside Bike Tour</h3>
<p>Cycle through scenic trails and discover hidden corners of the old town.</p>
<span class="activity-price">€20</span>
</div>
</a>

<a href="#" class="activity-card filterDiv nightlife show">
<img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=600" alt="Live Music" class="activity-image">
<div class="activity-content">
<h3>Jazz Night at The Cellar</h3>
<p>Every Friday and Saturday. Local jazz bands perform in an intimate underground venue.</p>
<span class="activity-price">€10</span>
</div>
</a>

<a href="#" class="activity-card filterDiv classes show">
<img src="https://images.unsplash.com/photo-1533073526757-2c8ca1df9f1c?w=600" alt="Cooking Class" class="activity-image">
<div class="activity-content">
<h3>Traditional Cooking Workshop</h3>
<p>Learn to make local dishes from a chef in a historic kitchen. Includes meal.</p>
<span class="activity-price">€45</span>
</div>
</a>

<a href="#" class="activity-card filterDiv events show">
<img src="https://images.unsplash.com/photo-1543007631-283050bb3e8c?w=600" alt="Trivia Night" class="activity-image">
<div class="activity-content">
<h3>Pub Quiz at The Oak</h3>
<p>Every Tuesday at 8 PM. Test your knowledge and meet locals over drinks.</p>
<span class="activity-price free">FREE</span>
</div>
</a>

<a href="#" class="activity-card filterDiv tours show">
<img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600" alt="Sunrise Hike" class="activity-image">
<div class="activity-content">
<h3>Sunrise Castle Hill Hike</h3>
<p>Saturday mornings at 6 AM. Watch the sunrise from the hilltop fortress.</p>
<span class="activity-price free">FREE</span>
</div>
</a>

<a href="#" class="activity-card filterDiv classes show">
<img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=600" alt="Art Workshop" class="activity-image">
<div class="activity-content">
<h3>Watercolor Workshop</h3>
<p>Sunday afternoons. Paint local landscapes with a professional artist in the park.</p>
<span class="activity-price">€30</span>
</div>
</a>

<a href="#" class="activity-card filterDiv nightlife show">
<img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600" alt="Poetry Reading" class="activity-image">
<div class="activity-content">
<h3>Open Mic Poetry Night</h3>
<p>First Monday of every month at The Library Café. Share or just listen.</p>
<span class="activity-price free">FREE</span>
</div>
</a>

<a href="#" class="activity-card filterDiv events show">
<img src="https://images.unsplash.com/photo-1528605248644-14dd04022da1?w=600" alt="Yoga" class="activity-image">
<div class="activity-content">
<h3>Riverside Yoga</h3>
<p>Wednesday and Sunday mornings at 8 AM. Outdoor yoga by the water.</p>
<span class="activity-price">€12</span>
</div>
</a>
</div>
</main>
<script src="filter-search.js"></script>
</body>
</html>