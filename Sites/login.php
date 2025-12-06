<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Log In - Discoverly</title>

<link rel="stylesheet" href="../Style/login.css">
<script src="../Scripts/login.js" defer></script>

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
<div class="login-container">

<h2>Welcome Back</h2>
<p class="subtitle">Log in to save your favorite places and leave reviews</p>

<?php

if (isset($_GET['registered=1'])) {
    echo '<p class="success-msg">Registration successful! Please log in.</p>';
}
?>

<form id="loginForm" action="../Scripts/loginhandler.php" method="POST">

    <div class="form-group">
        <label for="login-identifier">Email or Username</label>
        <input type="text" id="login-identifier" name="identifier">
		<span id="login-identifier-error" class="error-message"></span>
    </div>

    <div class="form-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" name="password">
		<span id="login-password-error" class="error-message"></span>
    </div>

    <button type="submit" name="login" class="btn-login">Log In</button>
</form>


<div class="divider">
<span>or</span>
</div>

<div class="signup-link">
Don't have an account? <a href="signup.php">Sign up</a>
</div>

</div>
</main>

</body>
</html>
