<?php
include "connection.php";
session_start(); 

if (isset($_POST['cname']) && isset($_POST['passwd'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $cname = validate($_POST['cname']);
    $passwd = validate($_POST['passwd']);
    
    $sql = "SELECT * FROM customer WHERE cname='$cname' AND passwd='$passwd'";
    $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['cname'] === "admin" && $row['passwd'] === "9632"){
                $_SESSION['cname'] = $row['cname'];
                $_SESSION['passwd'] = $row['passwd'];
                header("Location: adminhome.php");
                exit();
            }else{
                if($row['cname'] === $cname && $row['passwd'] === $passwd) {
                    echo "Logged in!";
                    $_SESSION['cname'] = $row['cname'];
                    $_SESSION['passwd'] = $row['passwd'];
                    $_SESSION['tid'] = $row['tid'];
                    header("Location: chome.php");
                    exit();
                }
            }  
        }
        else{
            echo '<script>
            alert("Incorect UserName or password");
            window.location.href = "index.php";
            </script>';
            exit();
        }
           
    }

