<?php
$host = "localhost";
$user = "root";   // phpMyAdmin username
$pass = "";       // phpMyAdmin password
$dbname = "web_app_project_db";  // database name

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
