<?php

    include "connection.php";
    error_reporting(0);

    $id = $_GET['rn'];
    $query = "DELETE FROM ticket WHERE  tid= '$id'";

    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo "<script>window.open('chome.php','_self')</script>";
    }
    else{
        echo "Failed";
    }
    header('Location: chome.php');

?>