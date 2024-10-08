<?php
session_start();
error_reporting(0);

include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style6.css">
<style>
        body {
            height: 100vh;
            background-image: url('images/istockphoto-1321288902-612x612.jpg');
            /* background-position: center; */
            background-size: cover;
            background-size: cover;
            /* background-position: center; */
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
       
</style>
</head>
<body>
<div class="bg-img">
  <div class="container">
    <div class="topnav">
    
        <h1 id="a41">Zoo</h1>
            <!-- <a href="login.php" class="a31">Log in</a> -->
            <div id="div4">
                <div id="div4">
                <a href="index.php" class="a41">Home</a>
                <a href="animal.php" class="a41">Animals</a>
                
                <a href="gallery.php" class="a41">Gallery</a>
                <a href="facility.php" class="a41">Facilities</a>
                <a href="/images/zoomap.png" class="a41">Map</a>
                <a href="login.php" class="a31">Log in</a>
                </div>
                </div>
    </div>
  </div>
</div>
            </nav>
            <div class="facility-gallery">
                    <div class="facility-image">
                        <!-- <img src="/images/a1.jpg" alt="Facility 1" href="elephant.php"> -->
                        <img src="/images/f1.jpg" alt="elephant.php">
                        <p class="p31">BATTERY OPERATED VEHICLE</p>
                    </div>
                    <div class="facility-image">
                        <img src="/images/f2.jpg" alt="Facility 2">
                        <p class="p31">PARKING SPACE</p>
                    </div>
                    <div class="facility-image">
                        <img src="/images/f3.jpg" alt="Facility 3">
                        <p class="p31">DRINKING WATER</p>
                    </div>
                    <div class="facility-image">
                        <img src="/images/f4.jpg" alt="Facility 4">
                        <p class="p31">RESTROOMS</p>
                    </div>
                    <!-- <div class="facility-image">
                        <img src="/images/f5.jpg" alt="Facility 5">
                        <p class="p31">BABY CARE UNIT</p>
                    </div> -->
                    <div class="facility-image">
                        <img src="/images/f6.jpg" alt="Facility 6">
                        <p class="p31">LIBRARY</p>
                    </div> 
                    
                    
            </div>
        
    </div>
   
</body>
</html>
