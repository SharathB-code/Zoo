<?php
session_start();
error_reporting(0);

include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style2.css">
<style>
        body {
            height: 100vh;
            background-image: url('images/istockphoto-1321288902-612x612.jpg');
            background-repeat: repeat;
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
<div class="row"> 
  <div class="column">
    <img src="/images/two-white-tigers-singapore-zoo-shutterstock_599944262.jpg" style="width:100%">
    <img src="/images/i1.jpg" style="width:100%">
    <img src="/images/o5.jpg" style="width:100%">
    <img src="/images/i3.jpg" style="width:100%">
    <img src="/images/o3.jpg" style="width:100%">
    <img src="/images/p2.jpg" style="width:100%">
    
  </div>
  <div class="column">
    <img src="/images/neil-and-zulma-scott-pHztxoXCvAw-unsplash.jpg" style="width:100%">
    <img src="/images/i7.jpg" style="width:100%">
    <img src="/images/p1.jpg" style="width:100%">
    <img src="/images/i9.jpg" style="width:100%">
    <img src="/images/i10.jpg" style="width:100%">
    
  </div>  
  <div class="column">
    <img src="/images/giant-pandas.jpg" style="width:100%">
    <img src="/images/p3.jpg" style="width:100%">
    <img src="/images/o4.jpg" style="width:100%">
    <img src="/images/i4.jpg" style="width:100%">
    <img src="/images/o7.jpg" style="width:100%">
    <img src="/images/i5.jpg" style="width:100%">
    
  </div>
  <div class="column">
    <img src="/images/o5.jpg" style="width:100%">
    <img src="/images/i8.jpg" style="width:100%">
    <img src="/images/p3.jpg" style="width:100%">
    <img src="/images/SD-Zoo-elephants.jpg" style="width:100%">
    <img src="/images/o1.jpg" style="width:100%">
    <img src="/images/i6.jpg" style="width:100%">
    
  </div>
</div>


</body>
</body>
</html>
