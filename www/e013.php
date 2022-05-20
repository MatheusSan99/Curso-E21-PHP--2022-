<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create Connection
$conn = new mysqli($servername, $username, $password);

// Check connection

if($conn -> connect_error) {
    echo "vou morrer ou exit";
    die("Connection failed: " . $conn -> connect_error);
}
echo "Connected sucessfully";

?>