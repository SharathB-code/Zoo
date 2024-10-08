<?php

    $conn = mysqli_connect("localhost", "root", "", "wildlife");

    if(!$conn){
        echo "connection failed!";
    }
?>