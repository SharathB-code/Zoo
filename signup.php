<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $username = $_POST['cname'];
        if(empty($username))
        {
            echo '<script>
            alert("Please enter your name");
            window.location.href = "signup.php";
        </script>';
        }
        if(!preg_match("/^[a-zA-Z\s]+$/",$username))
        {
            echo '<script>
                    alert("Please enter name as only string");
                    window.location.href = "signup.php";
                </script>';
           
        }
        $password = $_POST['passwd'];
        $cpassword = $_POST['rpasswd'];
        if(strlen($password)<8)
        {
            echo '<script>
                    alert("Please enter proper 8 digit password");
                    window.location.href = "signup.php";
                </script>';  
        }
        if(strlen($password)>8)
        {
            echo '<script>
                    alert("Please enter proper 8 digit password");
                    window.location.href = "signup.php";
                </script>';  
        }
        if(strlen($password)<8)
        {
            echo '<script>
                    alert("Please enter proper 8 digit password");
                    window.location.href = "signup.php";
                </script>';  
        }
        if(strlen($password)>8)
        {
            echo '<script>
                    alert("Please enter proper 8 digit password");
                    window.location.href = "signup.php";
                </script>';  
        }
        $mobile =  $_POST['mob'];
        if(empty($mobile))
        {
            echo '<script>
            alert("Please enter your name");
            window.location.href = "signup.php";
        </script>';
        }
        if(!preg_match("/^[0-9]*$/",$mobile))
        {
            echo '<script>
                    alert("Please enter mobile number");
                    window.location.href = "signup.php";
                </script>';  
        }
        if(strlen($mobile)<10)
        {
            echo '<script>
                    alert("Please enter proper mobile number");
                    window.location.href = "signup.php";
                    exit();
                </script>';  
        }
      
        
        $sql="select * from customer where cname='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from customer where mob='$mobile'";
        $result = mysqli_query($conn, $sql);
        $count_mobile = mysqli_num_rows($result);

        if($count_user == 0 & $count_mobile==0){
            if($password==$cpassword){
              
                $sql = "INSERT INTO customer(cname, passwd, rpasswd, mob) VALUES('$username', '$password','$cpassword', '$mobile')";
                
                $result = mysqli_query($conn, $sql);
                if($result){
                   
                    echo '<script>
                    alert("Registration Successful Go to Login Page..!");
                    window.location.href = "signup.php";
                </script>';
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signup.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_mobile>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Email already exists!!");
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
        <form name="form" action="signup.php" method="POST">
            <a href="login.php" class="c1">Login</a>
            <a href="signup.php" class="c1">Signup</a>
            <h1>Signup</h1>
            <div class="inputbox">
                
                <input type="text" id="cname" name="cname" placeholder="Username" required>
            </div>
            
            <div class="inputbox">
                <input type="password" id="passwd" name="passwd" placeholder="Password" required>
            </div>
            <div class="inputbox">
                <input type="password" id="rpasswd" name="rpasswd" placeholder="Re-type Password" required>
            </div>
            <div class="inputbox">
                <input type="number" id="mob" name="mob" placeholder="Phno" required>
            </div>
            <button type="submit" class="btn" name="submit">Sign up</button>
        </form>
</div>

</body>

</html>