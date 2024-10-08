<?php


session_start();
if(isset($_SESSION['cname']) && isset($_SESSION['passwd']))
{
    include "connection.php";
   
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $price =  $_POST['price'];
        
        

        $sql="select * from ticket where date='$date'";
        $result = mysqli_query($conn, $sql);
        $count_date = mysqli_num_rows($result);

        $sql="select * from ticket where time='$time' ";
        $result = mysqli_query($conn, $sql);
        $count_time = mysqli_num_rows($result);
        
        if($count_date == 0 & $count_time == 0){
            
              
                $sql = "INSERT INTO ticket( name, date, time, price) VALUES('$username', '$date','$time', '$price')";
                
                $result = mysqli_query($conn, $sql);
                if($result){
                   
                    echo '<script>
                    alert("Ticket Registration Successful  Check in display ticket..!");
                    window.location.href = "chome.php";
                </script>';
                }
            
          
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="chome.php";
                    alert("Name already registered by many customer!!");
                </script>';
            }
            if($count_date>0){
                echo '<script>
                    window.location.href="chome.php";
                    alert("Date already registered by many customer!!");
                </script>';
            }
            if($count_time>0){
                echo '<script>
                    window.location.href="chome.php";
                    alert("Time already registered by many customer!!");
                </script>';
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style4.css">
    <title>Ticket</title>

    <style>

body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
    background-image: url('/images/istockphoto-1321288902-612x612.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
h2{
    
    margin: 10px 30px;
}
</style>
</head>

<body>
<div class="wrapper">
        <form name="form" action="ticket.php" method="POST">
            <h1>Ticket</h1>
            <div class="inputbox">
                
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required>
                
                <!-- <label for="price">Price:</label> -->
                <!-- <input type="number" id="price" name="price" required> -->
                <h2>Ticket Price is Rs.400</h2>

                <button type="submit" class="btn" name="submit">Book Ticket</button>
        </form>
</div>

</body>
<?php
} else{
    header("Location: login.php");
    exit();
}
?>