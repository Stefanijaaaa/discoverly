<?php
session_start();
include "../Scripts/config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php?error=notloggedin");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT username, email FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();

$initials = strtoupper(substr($user['username'], 0, 2));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>My Profile - Discoverly</title>
<link rel="stylesheet" href="../Style/user-profile.css">
<script src="../Scripts/user-profile.js" defer></script>
</head>
<body>
<header>
<h1>Discoverly</h1>
<nav>
        <a href="../index.php">Home</a>
		<a href="hub.php">Plan Your Trip</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="user-profile.php">My Profile</a>
            <a href="../Scripts/logout.php" class="logout-btn">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
         
        <?php endif; ?>
    </nav>
</header>

<main>
<div class="profile-header">
<div class="profile-pic"><?php echo $initials; ?></div>

<div class="profile-info">
<h2><?php echo htmlspecialchars($user['username']); ?></h2>
<p><?php echo htmlspecialchars($user['email']); ?></p>

<div class="profile-stats">
<div class="stat">
<span class="stat-number">5</span>
<span class="stat-label">Saved Places</span>
</div>
<div class="stat">
<span class="stat-number">3</span>
<span class="stat-label">Reviews</span>
</div>
<div class="stat">
<span class="stat-number">2</span>
<span class="stat-label">Visited</span>
</div>
</div>

<button class="btn-edit" onclick="window.location='edit_profile.php'">Edit Profile</button>
</div>
</div>

<!-- Rest of page remains unchanged -->
