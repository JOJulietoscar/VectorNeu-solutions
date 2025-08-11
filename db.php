<?php
$host = "localhost";
$username = "root";
$password = ""; // default WAMP password is blank
$database = "vectorneu_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
