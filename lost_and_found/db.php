<?php
$conn = new mysqli("localhost", "root", "", "lost_and_found");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
