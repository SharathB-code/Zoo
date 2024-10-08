<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style5.css">
    <title>Incharge</title>

    <style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('/images/two-white-tigers-singapore-zoo-shutterstock_599944262.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
</style>
</head>

<body>
<div class="wrapper">
        <form action="login1.php" method="post">
            <a href="login.php" class="c1">Login</a>
            <a href="signup.php" class="c1">Signup</a>
            <h1>Login </h1>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="inputbox">
                
                <input type="text" id="cname" name="cname" placeholder="Username" required>
            </div>
            
            <div class="inputbox">
                <input type="password" id="passwd" name="passwd" placeholder="Password" required>
            </div>
            
            <button type="submit" class="btn" name="submit">Login</button>
        </form>
</div>

</body>

</html>