<?php
$host = "db";
$user = 'devuser';
$password = 'devpass';
$dbname = 'test_db';
$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>