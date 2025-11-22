<?php
include 'db_connection.php';
$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$sql= "INSERT INTO `users` (`Name`, `username`, `password`) VALUES ('$name', '$username', '$password')";
$result = $conn->query($sql);
if ($result) {
    echo "Data insert successfully";
    header("Location: dashboard.php");
} else {
    echo "Error";
}
?>