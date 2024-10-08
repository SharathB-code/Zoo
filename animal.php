<?php
session_start();
error_reporting(0);

include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style1.css">
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
            color:white
        }
        .card-title,.card-text{
            margin: 20px;
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
                <a href="birds.php" class="a41">Birds</a>
                <a href="gallery.php" class="a41">Gallery</a>
                <a href="facility.php" class="a41">Facilities</a>
                <a href="/images/zoomap.png" class="a41">Map</a>
                <a href="login.php" class="a31">Log in</a>
                </div>
                </div>
    </div>
  </div>
</div>
<div class="container py-5">
    <div class="row at-4">
        <?php
        
        $query ="CALL animal()";
        $query_run =mysqli_query($conn,$query);

        $check_animal =mysqli_num_rows($query_run)>0;

        if($check_animal)
        {
            while($row=mysqli_fetch_array($query_run))
            {
                ?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="display: flex; margin: 20px; ">
                                <img src="/images/<?php echo $row['img'];?>" class="card-img-top" alt="Faculty Images">
                                <div class="divs">

                                    <h3 class="card-title">Name: <?php echo $row['Aname'];?></h3>
                                    <h3 class="card-title">Species: <?php echo $row['Species'];?></h3>
                                    <h3 class="card-title">Gender: <?php echo $row['Gender'];?></h3>
                                    <p class="card-text" >
                                    Description:<?php echo $row['description'];?>
                                    </p>
                                </div>
                    </div>
                </div>
            </div>
               
            <?php
               
            }
        }
        else{
            echo'NO animal found';
        }
        
        ?>
        
       
</body>
</html>
