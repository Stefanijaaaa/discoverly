<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>About - Discoverly</title>
<link rel="stylesheet" href="../Style/about.css">
</head>
<body>
<header>
<h1>Discoverly</h1>
<nav>
        <a href="../index.php">Home</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="../Sites/user-profile.php">My Profile</a>
            <a href="../Scripts/logout.php" class="logout-btn">Logout</a>
        <?php else: ?>
            <a href="../Sites/login.php">Login</a>
         
        <?php endif; ?>
    </nav>
</header>

<main>
<div class="hero-section">
<h2>About Discoverly</h2>
<p>Your guide to discovering authentic local experiences beyond the tourist trail</p>
</div>

<div class="content-section">
<h3>Our Story</h3>
<p>We created Discoverly because we believe travel should be about more than just checking off famous landmarks. The best memories come from stumbling upon a cozy café tucked in a medieval cellar, discovering a Sunday flea market filled with local treasures, or joining an impromptu dance class at a neighborhood venue.</p>
<p>But finding these authentic experiences shouldn't require hours of scrolling through TikTok, Instagram, and Facebook groups. That's why we built a platform that brings all the best local spots and events together in one place.</p>
</div>

<div class="content-section">
<h3>What We Offer</h3>
<div class="features">
<div class="feature-box">
<h4>Curated Itineraries</h4>
<p>Ready-made trip plans for 1, 3, or 5 days that show you the best of the town</p>
</div>
<div class="feature-box">
<h4>Local Favorites</h4>
<p>Restaurants, cafés, museums, parks, and historic sites that locals actually visit</p>
</div>
<div class="feature-box">
<h4>Hidden Events</h4>
<p>Weekly markets, pop-up events, and activities that tourists usually miss</p>
</div>
<div class="feature-box">
<h4>Community Reviews</h4>
<p>Real recommendations from travelers who've been there</p>
</div>
</div>
</div>

<div class="content-section">
<h3>Our Mission</h3>
<p>We're on a mission to bridge the gap between mainstream tourism and authentic local culture. Whether you're a first-time visitor or a curious local looking to rediscover your own town, Discoverly helps you find experiences that make every trip memorable.</p>
<p>No more scattered information across platforms. No more missing out on the best spots because they weren't well-advertised. Just honest recommendations and easy trip planning in one place.</p>
</div>

<div class="cta-section">
<h3>Ready to Explore?</h3>
<p>Start planning your next adventure and discover what makes this place special</p>
<a href="hub.php" class="btn-primary">Plan Your Trip</a>
<!-- they can plan a trip only if they are logged in, so this will change depending on wether they are logged in or not-->
<!-- if they are not logged in, its gonna say log in instead of plan your trip :)-->
</div>="#">About
</main>

</body>
</html>