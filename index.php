<?php
// Include Rooms Data
require_once __DIR__ . '/partials/scripts/get-rooms.php'
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
    $title = 'Rooms Archive';
    require_once __DIR__ . '/partials/templates/header.php';
    ?>

    <main class="room-archive-main">
        <?php
        if(!empty($rooms)){ ?>

            <div class="container">
                <?php foreach($rooms as $room) { ?> 
                    <!-- Room Card -->
                    <a href="./room-details.php?id=<?php echo $room['id'];?>">
                        <div class="card">
                            <h3><?php echo $room['id'];?></h3>    
                            <h2>#<?php echo $room['room_number'];?></h2> 
                            <!-- Card Nail -->
                            <div class="nails nail-archive"></div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p>No rooms data founds</p>
        <?php } ?>
    </main>
</body>
</html>