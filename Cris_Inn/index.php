<!DOCTYPE html>
<html>
<head>
    <title>Cris Inn Resort</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#reservation">Reservation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h1>Welcome to Cris Inn Resort</h1>
            <img src="cris_inn.jpg" alt="Cris Inn Resort">
            <p>Cris Inn Resort is a beautiful beachfront resort located in Purok 4-A, Barangay Peñaplata, Island Garden City of Samal. Our resort offers a variety of rooms and amenities to make your stay with us comfortable and enjoyable.</p>
        </section>
        <section id="rooms">
            <h1>Our Rooms</h1>
            <div class="room-grid">
                <div class="room">
                    <h2>Single Room</h2>
                    <img src="single_room.jpg" alt="Single Room">
                    <p>This is a single room.</p>
                    <p>Price: PHP 1000.00 per night</p>
                </div>
                <div class="room">
                    <h2>Double Room</h2>
                    <img src="double_room.jpg" alt="Double Room">
                    <p>This is a double room.</p>
                    <p>Price: PHP 1500.00 per night</p>
                </div>
                <div class="room">
                    <h2>Suite Room</h2>
                    <img src="suite_room.jpg" alt="Suite Room">
                    <p>This is a suite room.</p>
                    <p>Price: PHP 2000.00 per night</p>
                </div>
            </div>
        </section>
        <section id="reservation">
            <h1>Make a Reservation</h1>
            <form action="reservation.php" method="post">
                <label for="room_id">Room Type:</label>
                <select id="room_id" name="room_id">
                    <option value="1">Single Room</option>
                    <option value="2">Double Room</option>
                    <option value="3">Suite Room</option>
                </select>
                <label for="number_of_rooms">Number of Rooms:</label>
                <input type="number" id="number_of_rooms" name="number_of_rooms">
                <label for="number_of_persons">Number of Persons:</label>
                <input type="number" id="number_of_persons" name="number_of_persons">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date">
                <input type="submit" value="Reserve">
            </form>
        </section>
        <section id="contact">
            <h1>Contact Us</h1>
            <p>Address: Purok 4-A, Baranagay Peñaplata, Island Garden City of Samal</p>
            <p>Phone: 0927-123-4567</p>
            <p>Email: [crisinnresort@gmail.com](mailto:crisinnresort@gmail.com)</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Cris Inn Resort</p>
    </footer>
</body>
</html>