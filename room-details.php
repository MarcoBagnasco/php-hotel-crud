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
                    <h3><?php echo $room['id']; ?></h3>
                    <h2>Room #<?php echo $room['room_number'];?></h2>
                    <div><i class="fas fa-sort-amount-up-alt"></i> Floor: <?php echo $room['floor'];?></div>
                    <div><i class="fas fa-bed"></i> Beds Number: <?php echo $room['beds'];?></div>
                    <!-- Details Card Nails -->
                    <div class="nails nail-1"></div>
                    <div class="nails nail-2"></div>
                    <div class="nails nail-3"></div>
                    <div class="nails nail-4"></div>
                    <!-- Scroll Arrows -->
                    <?php if ($room['id'] > 1) { ?>
                        <a href="?id=<?php echo ($room['id'] - 1)?>"><i class="fas fa-chevron-left scroll-arrows left"></i></a>
                    <?php } ?>
                    <?php if ($room['id'] < $tot_rooms) { ?>
                        <a href="?id=<?php echo ($room['id'] + 1) ?>"><i class="fas fa-chevron-right scroll-arrows right"></i></a>
                    <?php } ?>
                </div>
            </div>
        <?php } else { ?>
            <p>No room found</p>
        <?php } ?>
        <!-- Back to Archive -->
        <a href="./"><i class="fas fa-arrow-left"></i>Back to Rooms Archive</a>
    </main>


</body>
</html>