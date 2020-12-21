<?php
// Start the session
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$equal = "Not Equal";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = $_POST['login'];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE login='$login' and password='$password'";
$result = $conn->query($sql);

if($_POST["login"] == $login && $_POST["password"] == $password) {
    $equal = "Equal";
if ($result->num_rows > 0) {
    $_SESSION["auth"] = true;
    header("Location:/restricted.php");
}

echo "$equal"; 
} else {
    $_SESSION["auth"] = false;
    header("Location:/login.php");
}