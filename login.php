<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include 'config.php';

$username = $_POST['username'] ?? '';
$password = md5($_POST['password'] ?? '');

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($query) > 0) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
} else {
    header("Location: gagal.php");
    exit();
}
?>