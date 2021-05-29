<?php
/**
 * GET ROOMS DATA
 */

// Include DB Connection
require_once __DIR__ . '/database.php';

// SQL Query
$sql = "SELECT * FROM `stanze`";
$result = $conn -> query($sql);

if($result && $result -> num_rows > 0){
    // Rooms Array
    $rooms = [];
    while($row = $result -> fetch_assoc()){
        $rooms[] = $row;
    }
    
} else {
    echo 'Query error';
}

// Close Connection
$conn -> close();