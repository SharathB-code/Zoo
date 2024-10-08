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
        
            <h1 class="b41">Welcome <?php echo $_SESSION['cname'] ?></h1>
          
        <div id="div4">
               
            <a href="ticket.php" class="a41">Tickets</a>
            <a href="cticket.php" class="a41">Display Tickets</a>
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