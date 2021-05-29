<?php
/**
 * DATABASE CONNECTION
 */

$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'hotel_exercise';

// Open connection
$conn = new mysqli($host, $user, $password, $db_name);

// Check connection
if($conn && $conn->connect_error){
    die("Connection Failed: $conn -> conect_error");
}
?>
