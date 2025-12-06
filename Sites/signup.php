<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Sign Up - Discoverly</title>
<link rel="stylesheet" href="../Style/Signup.css">
<script src="../Scripts/signup.js"></script> 

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
<div class="signup-container">
<h2>Create Account</h2>
<p class="subtitle">Join us to save your favorite places and share reviews</p>

<form id="signupID" method="POST" action="../Scripts/signuphandler.php">
    
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Choose a username" required>
        <span class="error-message" id="username-error"></span>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="your@email.com" required>
        <span class="error-message" id="email-error"></span>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password" required>
        <span class="error-message" id="password-error"></span>
    </div>

    <div class="form-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm your password" required>
        <span class="error-message" id="confirm-password-error"></span>
    </div>

    <button name="signup" type="submit" class="btn-signup">Sign Up</button>
</form>

<div class="divider"><span>or</span></div>

<div class="login-link">
Already have an account? <a href="login.php">Log in</a>
</div>
</div>
</main>

</body>
</html>