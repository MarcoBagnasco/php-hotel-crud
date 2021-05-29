<?php
require_once __DIR__ . '/partials/scripts/get_rooms.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel CRUD</title>
</head>
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
                        <td><a href="./room_detail.php?id=<?php echo $room['id'];?>">Room Details</a></td>    
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } else { ?>
                <p>No rooms data founds</p>
    <?php } ?>
</body>
</html>