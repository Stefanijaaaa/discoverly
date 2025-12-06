<?php
session_start();
include "config.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../Sites/login.php?error=notloggedin");
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../Sites/edituser.php?error=invalidrequest");
    exit();
}

$new_username = trim($_POST['username']);
$new_email    = trim($_POST['email']);
$current_pass = trim($_POST['current_password']);

$new_pass     = trim($_POST['new_password']);
$confirm_pass = trim($_POST['confirm_password']);

$sql = "SELECT username, email, password FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if (!password_verify($current_pass, $user['password'])) {
    header("Location: ../Sites/edituser.php?error=wrongpassword");
    exit();
}

if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../Sites/edituser.php?error=invalidemail");
    exit();
}

$sql = "SELECT user_id FROM users WHERE (username = ? OR email = ?) AND user_id != ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $new_username, $new_email, $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../Sites/edituser.php?error=userexists");
    exit();
}


if (!empty($new_pass)) {

    if ($new_pass !== $confirm_pass) {
        header("Location: ../Sites/edituser.php?error=passwordmismatch");
        exit();
    }

    if (strlen($new_pass) < 6) {
        header("Location: ../Sites/edituser.php?error=weakpassword");
        exit();
    }

    $hashed = password_hash($new_pass, PASSWORD_BCRYPT);

    $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $new_username, $new_email, $hashed, $user_id);

} else {

    $sql = "UPDATE users SET username = ?, email = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $new_username, $new_email, $user_id);
}

if ($stmt->execute()) {

    $_SESSION['username'] = $new_username;
    $_SESSION['email'] = $new_email;

    header("Location: ../Sites/edituser.php?updated=1");
    exit();

} else {
    header("Location: ../Sites/edituser.php?error=updatefailed");
    exit();
}
?>
