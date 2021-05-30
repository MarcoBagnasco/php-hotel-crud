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
    // Include Header
    $title = 'Room Details';  
    require_once __DIR__ . '/partials/templates/header.php';
    ?>

    <main class="room-details-main">
        <?php
        if(!empty($room)) { ?>
            <div class="container">
                <!-- Details Card -->
                <div class="details-card">
                    <h2>Room #<?php echo $room['room_number'];?></h2>
                    <div><i class="fas fa-sort-amount-up-alt"></i> Floor: <?php echo $room['floor'];?></div>
                    <div><i class="fas fa-bed"></i> Beds Number: <?php echo $room['beds'];?></div>
                    <!-- Details Card Nails -->
                    <div class="nails nail-1"></div>
                    <div class="nails nail-2"></div>
                    <div class="nails nail-3"></div>
                    <div class="nails nail-4"></div>
                </div>
            </div>
        <?php } else { ?>
            <p>No room found</p>
        <?php } ?>
        
        <a href="./"><i class="fas fa-arrow-left"></i>Back to Rooms Archive</a>
    </main>


</body>
</html>