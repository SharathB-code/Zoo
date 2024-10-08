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
<link rel="stylesheet" href="css/style.css">



<div class="bg-img">
  <div class="container">
    <div class="topnav">
        
            <h1 class="b41">Admin Home Page</h1>
          
        <div id="div4">
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
</head>
<body>
      </body>
</html>
<?php
} else{
    header("Location: login.php");
    exit();
}
?>