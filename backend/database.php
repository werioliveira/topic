<?php
session_start();
$servername = "172.28.144.1";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$_SESSION['main_url'] = 'http://localhost/backend';

?>