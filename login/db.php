<?php
$servername = "localhost";
$username = "root";
$password = ""; // default XAMPP password
$database = "recipehub_db"; // match your actual DB name

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
