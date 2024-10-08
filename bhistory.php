<?php
    include "connection.php";
    session_start();
    if(isset($_SESSION['cname']) && isset($_SESSION['passwd']))
    {
   
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
            color:white;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
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
                <a href="adminhome.php" class="a41">Admin home</a>
                <a href="addanimal.php" class="a41">Add Animals</a>
                <a href="addbird.php" class="a41">Add Birds</a>
                <a href="addticket.php" class="a41">Add Tickets</a>
                <a href="mticket.php" class="a41">Display Tickets</a>
                <a href="ahistory.php" class="a41">Animal history</a>
                <a href="bhistory.php" class="a41">Bird history</a>
                <a href="logout.php" class="a31">Log out</a>
                </div>
                </div>
    </div>
  </div>
</div>
<div class="container py-5">
    <div class="row at-4">
        <?php
        
        $query ="select * from bhistory";
        $query_run =mysqli_query($conn,$query);

        $check_bird =mysqli_num_rows($query_run)>0;

        if($check_bird)
        {
            while($row=mysqli_fetch_array($query_run))
            {
                ?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body" style="display: flex; margin: 20px; ">
                                <img src="/images/<?php echo $row['img'];?>" class="card-img-top" alt="Faculty Images">
                                <div class="divs">
                                <h4 class="card-title">Name: <?php echo $row['Bname'];?></h4>
                                <h3 class="card-title">Species: <?php echo $row['Species'];?></h3>
                                <h3 class="card-title">Gender: <?php echo $row['Gender'];?></h3>
                                <p class="card-text">
                                Description: <?php echo $row['description'];?>
                                </p>
                                </div>
                    </div>
                </div>
            </div>
               
            <?php
               
            }
        }
        else{
            echo'NO birds found';
        }
        
        ?>
        

</body>
</html>
<?php
} else{
    header("Location: login.php");
    exit();
}
?>
