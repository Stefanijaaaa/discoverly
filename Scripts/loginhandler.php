<?php
session_start();
include "config.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {

    $identifier = $_POST['identifier']; 
    $password   = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $identifier, $identifier);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        header("Location: ../Sites/login.php?error=notfound");
        exit();
    }

    $user = $result->fetch_assoc();


    if (!password_verify($password, $user['password'])) {
        header("Location: ../Sites/login.php?error=wrongpassword");
        exit();
    } 

    $_SESSION['user_id'] = $user['user_id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email'];

    header("Location: ../index.php?login=success");
    exit();
}
?>



