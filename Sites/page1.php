<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Plan Your Trip - Discoverly</title>
<link rel="stylesheet" href="../Style/page1.css">
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
<div class="hero-title">
<h2>Plan Your Visit</h2>
<p>Choose how you'd like to explore</p>
</div>

<section class="section">
<h3 class="section-title">Day Trips</h3>
<div class="scroll-container">
<a href="1-day.html" class="card">
<img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600" alt="1 Day Trip" class="card-image">
<div class="card-content">
<h3>1-Day Trip</h3>
<p>Experience the highlights in one perfect day</p>
</div>
</a>

<a href="3-day.html" class="card">
<img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=600" alt="3 Day Trip" class="card-image">
<div class="card-content">
<h3>3-Day Adventure</h3>
<p>Explore deeper with a long weekend</p>
</div>
</a>

<a href="5-day.html" class="card">
<img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600" alt="5 Day Trip" class="card-image">
<div class="card-content">
<h3>5-Day Deep Dive</h3>
<p>Live like a local for five unforgettable days</p>
</div>
</a>
</div>
</section>

<section class="section">
<div style="display: flex; justify-content: space-between; align-items: center; padding-left: 0.5rem; padding-right: 0.5rem; margin-bottom: 1rem;">
<a href="places.php" style="text-decoration: none;">
<h3 class="section-title" style="margin-bottom: 0;">Places to Visit</h3>
</a>
<a href="places.php" style="text-decoration: none; color: var(--accent-color); font-weight: 600; font-size: 1rem; display: flex; align-items: center; gap: 0.5rem; transition: gap 0.3s ease;">
See All 
<span style="font-size: 1.2rem;">→</span>
</a>
</div>
<div class="scroll-container">
<a href="places.php?filter=restaurants" class="card">
<img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600" alt="Restaurants" class="card-image">
<div class="card-content">
<h3>Restaurants</h3>
<p>From traditional taverns to modern cuisine</p>
</div>
</a>

<a href="places.php?filter=cafes" class="card">
<img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=600" alt="Cafés" class="card-image">
<div class="card-content">
<h3>Cafés</h3>
<p>Cozy spots for coffee and pastries</p>
</div>
</a>

<a href="places.php?filter=historic-sights" class="card">
<img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=600" alt="Historic Sights" class="card-image">
<div class="card-content">
<h3>Historic Sights</h3>
<p>Castles, bridges, and architectural landmarks</p>
</div>
</a>

<a href="places.php?filter=museums" class="card">
<img src="https://images.unsplash.com/photo-1565098772267-60af42b81ef2?w=600" alt="Museums" class="card-image">
<div class="card-content">
<h3>Museums</h3>
<p>Art, history, and cultural exhibitions</p>
</div>
</a>

<a href="places.php?filter=parks" class="card">
<img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600" alt="Parks" class="card-image">
<div class="card-content">
<h3>Parks</h3>
<p>Gardens, green spaces, and nature escapes</p>
</div>
</a>
</div>
</section>

<section class="section">
<div style="display: flex; justify-content: space-between; align-items: center; padding-left: 0.5rem; padding-right: 0.5rem; margin-bottom: 1rem;">
<a href="activities.php" style="text-decoration: none;">
<h3 class="section-title" style="margin-bottom: 0;">Activities</h3>
</a>
<a href="activities.php" style="text-decoration: none; color: var(--accent-color); font-weight: 600; font-size: 1rem; display: flex; align-items: center; gap: 0.5rem; transition: gap 0.3s ease;">
See All 
<span style="font-size: 1.2rem;">→</span>
</a>
</div>
<div class="scroll-container">
<a href="activity-flea.html" class="card">
<img src="https://images.unsplash.com/photo-1490818387583-1baba5e638af?w=600" alt="Flea Market" class="card-image">
<div class="card-content">
<h3>Sunday Flea Market</h3>
<p>Every Sunday 8 AM - 12 PM, vintage treasures and crafts</p>
</div>
</a>

<a href="activity-food.html" class="card">
<img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=600" alt="Food Tour" class="card-image">
<div class="card-content">
<h3>Local Food Tour</h3>
<p>Taste authentic dishes at hidden local eateries</p>
</div>
</a>

<a href="activity-bike.html" class="card">
<img src="https://images.unsplash.com/photo-1507035895480-2b3156c31fc8?w=600" alt="Bike Tour" class="card-image">
<div class="card-content">
<h3>Riverside Bike Tour</h3>
<p>Cycle along scenic trails and through old town</p>
</div>
</a>

<a href="activity-wine.html" class="card">
<img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?w=600" alt="Wine Tasting" class="card-image">
<div class="card-content">
<h3>Wine Cellar Visit</h3>
<p>Sample regional wines in historic underground cellars</p>
</div>
</a>
</div>
</section>
</main>
<script src="filter-search.js"></script>
</body>
</html>