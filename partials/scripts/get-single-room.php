<?php
/**
 * GET ROOM DETAILS
 */

// Include DB Connection
require_once __DIR__ . '/database.php';

// Get Room ID
$id = empty($_GET['id']) ? NULL : $_GET['id'];

if($id){
    // Prepared Statement
    $stmt = $conn -> prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt -> bind_param('i', $id);
    $stmt -> execute();

    $result = $stmt -> get_result();

    if($result && $result -> num_rows > 0){
        $room = $result -> fetch_assoc();
    }
} else {
    echo 'No ID detected';
}

// Get Tot Rooms Number
// SQL Query
$sql = "SELECT MAX(`id`) AS `max` FROM `stanze`";
$result = $conn -> query($sql);

if($result && $result -> num_rows > 0){
    // Tot Array
    $tot_rooms_array = $result -> fetch_assoc();
    // Tot
    $tot_rooms = (int)$tot_rooms_array['max'];
} else {
    echo 'Query error';
}

// Close Connection
$conn -> close();