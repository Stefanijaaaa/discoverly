<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Plan Your Trip - Discoverly</title>

  <!-- Global shared layout -->
  <link rel="stylesheet" href="pages-layout/base.css">

  <!-- Page-specific styling -->
  <link rel="stylesheet" href="pages-layout/page1.css">
</head>

<body>
<div class="site-wrapper">

  <header>
    <h1><a href="index.html">Discoverly</a></h1>
    <nav>
      <a href="login.html">Log In</a>
      <a href="about.html">About</a>
    </nav>
  </header>

  <main>
    <div class="hero-title">
      <h2>Plan Your Visit</h2>
      <p>Choose how you'd like to explore</p>
    </div>

    <!-- DAY TRIPS -->
    <section class="section">
      <h3 class="section-title">Day Trips</h3>

      <div class="scroll-container">
        <a href="./day-trips/1_day_trip.html" class="card">
          <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?w=600" alt="1 Day Trip" class="card-image">
          <div class="card-content">
            <h3>1-Day Trip</h3>
            <p>Experience the highlights in one perfect day</p>
          </div>
        </a>

        <a href="./day-trips/3_day_trip.html" class="card">
          <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?w=600" alt="3 Day Trip" class="card-image">
          <div class="card-content">
            <h3>3-Day Adventure</h3>
            <p>Explore deeper with a long weekend</p>
          </div>
        </a>

        <a href="./day-trips/5_day_trip.html" class="card">
          <img src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=600" alt="5 Day Trip" class="card-image">
          <div class="card-content">
            <h3>5-Day Deep Dive</h3>
            <p>Live like a local for five unforgettable days</p>
          </div>
        </a>
      </div>
    </section>

    <!-- PLACES -->
    <section class="section">
      <div class="section-header">
        <a href="places.html" class="section-title-link">
          <h3 class="section-title no-margin">Places to Visit</h3>
        </a>
        <a href="places.html" class="see-all-link">
          See All <span>→</span>
        </a>
      </div>

      <div class="scroll-container">
        <a href="places.html?filter=restaurants" class="card">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=600" alt="Restaurants" class="card-image">
          <div class="card-content">
            <h3>Restaurants</h3>
            <p>From traditional taverns to modern cuisine</p>
          </div>
        </a>

        <a href="places.html?filter=cafes" class="card">
          <img src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?w=600" alt="Cafés" class="card-image">
          <div class="card-content">
            <h3>Cafés</h3>
            <p>Cozy spots for coffee and pastries</p>
          </div>
        </a>

        <a href="places.html?filter=historic-sights" class="card">
          <img src="https://images.unsplash.com/photo-1464207687429-7505649dae38?w=600" alt="Historic Sights" class="card-image">
          <div class="card-content">
            <h3>Historic Sights</h3>
            <p>Castles, bridges, and architectural landmarks</p>
          </div>
        </a>

        <a href="places.html?filter=museums" class="card">
          <img src="https://images.unsplash.com/photo-1565098772267-60af42b81ef2?w=600" alt="Museums" class="card-image">
          <div class="card-content">
            <h3>Museums</h3>
            <p>Art, history, and cultural exhibitions</p>
          </div>
        </a>

        <a href="places.html?filter=parks" class="card">
          <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600" alt="Parks" class="card-image">
          <div class="card-content">
            <h3>Parks</h3>
            <p>Gardens, green spaces, and nature escapes</p>
          </div>
        </a>
      </div>
    </section>

    <!-- ACTIVITIES -->
    <section class="section">
      <div class="section-header">
        <a href="activities.html" class="section-title-link">
          <h3 class="section-title no-margin">Activities</h3>
        </a>
        <a href="activities.html" class="see-all-link">
          See All <span>→</span>
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

</div>

<script src="filter-search.js"></script>
</body>
</html>