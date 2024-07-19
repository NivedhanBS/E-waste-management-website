<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "data"; // Replace with your actual database name

// Create connection
$db = new mysqli($servername, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
