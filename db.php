<?php
$host = 'db';
$user = 'user';
$pass = 'pass';
$dbname = 'webapp';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
