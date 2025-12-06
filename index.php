<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Discoverly</title>
  <link rel="stylesheet" href="Style/index.css">
  <script src="Scripts/index.js" defer></script>
</head>
<script>
function confirmLogout() {
    if (confirm("Are you sure you want to log out?")) {
        window.location.href = "Scripts/logout.php";
    }
}
let inactivityTime = 0;

document.onmousemove = document.onkeypress = () => {
    inactivityTime = 0;
};

setInterval(() => {
    inactivityTime++;

    if (inactivityTime >= 15) {
        alert("You were automatically logged out due to inactivity.");
        window.location.href = "Scripts/logout.php";
    }

}, 60000);
</script>
<body>
  <header>
    <h1>Discoverly</h1>
    <nav>
        <a href="Sites/about.php">About</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="Sites/user-profile.php">My Profile</a>
            <a href="Scripts/logout.php" class="logout-btn">Logout</a>
        <?php else: ?>
            <a href="Sites/login.php">Login</a>
         
        <?php endif; ?>
    </nav>
  </header>

  <main>
 
<?php
if (isset($_GET['login']) && $_GET['login'] === "success") {
    echo '<p class="success-msg">Successfully logged in!</p>';
}
?>
    <h2>Discover Hidden Gems in Town Name</h2>
    <p>Explore the best of your town with our guide to lesser-known attractions, cozy spots, and local favorites.</p>
    <button href="Sites/page1.php"class="btn-primary">Get Started</button>

    <div class="card-container">
      <div class="card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="Quaint Café">
        <div class="card-content">
          <h3>Quaint Café</h3>
          <p>A cozy spot known for its artisanal coffee and homemade pastries.</p>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="Hidden Park">
        <div class="card-content">
          <h3>Hidden Park</h3>
          <p>A tranquil park with shaded trails and hidden benches.</p>
        </div>
      </div>

      <div class="card">
        <img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470" alt="Historic Site">
        <div class="card-content">
          <h3>Historic Site</h3>
          <p>A lesser-known landmark with rich history and architectural beauty.</p>
        </div>
      </div>

      
    </div>
  </main>
  <script src="index.js"></script>
</body>
</html>
