<?php
include 'config.php';

if (isset($_GET['room_id'])) {
    $room_id = $_GET['room_id'];

    $query = "SELECT * FROM room WHERE Room_ID = '$room_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<h1>' . $row['Room_type'] . '</h1>';
            echo '<img src="' . $row['Room_image'] . '" alt="' . $row['Room_type'] . '">';
            echo '<p>' . $row['Room_description'] . '</p>';
            echo '<p>Price: PHP ' . $row['Room_price'] . ' per night</p>';
        }
    }
}
?>