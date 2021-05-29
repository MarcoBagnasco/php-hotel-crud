<?php
// Get Room Details
require_once __DIR__ . '/partials/scripts/get-single-room.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php 
// Head
require_once __DIR__ . '/partials/templates/head.php';
?>

<body>
    <?php
    if(!empty($room)) { ?>
        <h1>Room #<?php echo $room['room_number'];?></h1>

        <ul>
            <li>Floor: <?php echo $room['floor'];?></li>
            <li>Beds Number: <?php echo $room['beds'];?></li>
        </ul>
    <?php } else { ?>
        <p>No room found</p>
    <?php } ?>
    
    <a href="./">Back to Rooms Archive</a>


</body>
</html>