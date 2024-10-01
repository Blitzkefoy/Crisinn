<?php
include 'config.php';

if (isset($_POST['room_id'])) {
    $room_id = $_POST['room_id'];
    $number_of_rooms = $_POST['number_of_rooms'];
    $number_of_persons = $_POST['number_of_persons'];
    $date = $_POST['date'];

    $query = "INSERT INTO reservation (Room_ID, Number_of_Rooms, Number_of_Persons, Date) VALUES ('$room_id', '$number_of_rooms', '$number_of_persons', '$date')";
    $conn->query($query);

    echo 'Reservation successful!';
} else {
    echo 'Error: Please fill out all fields.';
}
?>