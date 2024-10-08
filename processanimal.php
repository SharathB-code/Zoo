<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $Aname=$_POST['Aname'];
        $Species=$_POST['Species'];
        $Gender=$_POST['Gender'];
        $description=$_POST['description'];
        $img=$_POST['img'];

        $check = "SELECT * FROM animals WHERE Aname = '$Aname' ";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Animal Already Exists..!')</script>";
            echo "<script>window.open('addanimal.php','_self')</script>";
        }else if(mysqli_num_rows($result) == 0){
            $sql="INSERT INTO animals (Aname, Species, Gender, description, img) VALUES('$Aname', '$Species', '$Gender', '$description', '$img')";
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('New Animal Added..!')</script>";
                echo "<script>window.open('adminhome.php','_self')</script>";
            }else{
                echo "error".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>