<?php
session_start();
include "../Scripts/config.php";


if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT username, email FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Edit Profile - Discoverly</title>
<link rel="stylesheet" href="../Style/edituser.css">

</head>

<body>

<header>
    <h1 >Discoverly</h1>

    <nav class="nav-links">
        <a href="../index.php">Home</a>
        <a href="hub.php">Plan Your Trip</a>

        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="user-profile.php">My Profile</a>
            <a class="logout" href="../Scripts/logout.php">Log Out</a>
        <?php else: ?>
            <a href="login.php">Log In</a>
            <a href="signup.php">Sign Up</a>
        <?php endif; ?>
    </nav>
</header>

<main class="container">

    <h2>Edit Profile</h2>

    <?php if (isset($_GET['updated'])): ?>
        <p class="success-msg">Profile updated successfully!</p>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <p class="error-msg"><?php echo htmlspecialchars($_GET['error']); ?></p>
    <?php endif; ?>

    <form action="../Scripts/update_profile.php" method="POST" class="edit-form">

        <h3>Account Information</h3>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $user['username']; ?>" required>
        </div>

        <div class="form-group">
            <label>Email Address</label>
            <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        </div>

        <div class="form-group">
            <label>Confirm Changes With Current Password</label>
            <input type="password" name="current_password" placeholder="Enter current password" required>
        </div>

        <button type="submit" name="update_basic" class="btn">Save Changes</button>

        <hr>

        <h3>Change Password</h3>

        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="new_password">
        </div>

        <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="confirm_password">
        </div>

        <button class="btn" type="submit" name="update_password" class="btn-secondary">Change Password</button>

    </form>

</main>

</body>
</html>
