<?php
session_start();
error_reporting(0);

include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo</title>
    <link rel="stylesheet" href="css/style11.css"> <!-- Link to your CSS file -->
    <script src="script.js" defer></script> <!-- Defer loading of script for better performance -->
</head>
<body>

<header class="header">
    <div class="container">
        <h1 class="logo">Zoo</h1>
        <nav class="topnav">
            <a href="index.php" class="nav-link">Home</a>
            <a href="animal.php" class="nav-link">Animals</a>
            <a href="gallery.php" class="nav-link">Gallery</a>
            <a href="facility.php" class="nav-link">Facilities</a>
            <a href="map.php" class="nav-link">Map</a>
            <a href="login.php" class="nav-link">Log in</a>
        </nav>
    </div>
</header>

<section class="main-content">
    <div class="container">
        <h2>Welcome to Our Zoo!</h2>
        <p>
            Your introductory text or information about the zoo can go here.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Donec consequat justo quis augue lobortis, sit amet tempor turpis vehicula.
        </p>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Zoo. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
