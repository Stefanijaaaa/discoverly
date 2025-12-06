<?php
include "config.php";
$error = "1";
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $sql  = "SELECT username, email FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
	print_r ("dela");

    if ($row = $result->fetch_assoc()) {
        if ($row['username'] === $username && $row['email'] === $email) {
              header("Location: ../Sites/signup.php?error=" . $error);
        } elseif ($row['username'] === $username) {
              header("Location: ../Sites/signup.php?error=" . $error);
        } else {
             header("Location: ../Sites/signup.php?error=" . $error);
        }

        header("Location: ../Sites/signup.php?error=" . $error);
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $sql  = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        header("Location: ../Sites/login.php?registered=1");
        exit();
    } else {
        die("Error inserting user: " . $stmt->error);
    }
}
?>
