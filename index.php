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
    <h1>Rooms Archive</h1>

    <?php
    if(!empty($rooms)){ ?>
        <table>
            <thead>
                <tr>
                    <th>Room ID</th>
                    <th>Room Number</th>
                </tr> 
            </thead>
            <tbody>
                <?php foreach($rooms as $room) { ?> 
                    <tr>
                        <td><?php echo $room['id'];?></td>    
                        <td><?php echo $room['room_number'];?></td>    
                        <td><a href="./room-details.php?id=<?php echo $room['id'];?>">Room Details</a></td>    
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } else { ?>
        <p>No rooms data founds</p>
    <?php } ?>
</body>
</html>