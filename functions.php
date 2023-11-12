<?php
date_default_timezone_set('Asia/Manila');
$server = "localhost";
$user = "root";
$pass = "";
$database = "capstone";

// Create a new MySQLi connection object
$conn = new mysqli($server, $user, $pass, $database);

// Check for a successful connection
if ($conn->connect_error) {
    die("<script>alert('Connection Failed: " . $conn->connect_error . "')</script>");
}
