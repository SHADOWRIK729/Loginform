<?php
session_start();
include 'db_connection.php';
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
// echo "<pre>";
$sql = "SELECT * FROM `users` WHERE username = '$username' AND password = '$password';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    print_r($result);
    header("Location: dashboard.php");
} else {
    echo "No User forund";
    header("Location: index.php");
}
?>
