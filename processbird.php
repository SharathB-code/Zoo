<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $Bname=$_POST['Bname'];
        $Species=$_POST['Species'];
        $Gender=$_POST['Gender'];
        $description=$_POST['description'];
        $img=$_POST['img'];

        $check = "SELECT * FROM birds WHERE Bname = '$Bname' ";
        $result = mysqli_query($conn, $check);

        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Bird Already Exists..!')</script>";
            echo "<script>window.open('addbird.php','_self')</script>";
        }else if(mysqli_num_rows($result) == 0){
            $sql="INSERT INTO birds (Bname, Species, Gender, description, img) VALUES('$bname', '$Species', '$Gender', '$description', '$img')";
            if(mysqli_query($conn, $sql)){
                echo "<script>alert('New Bird Added..!')</script>";
                echo "<script>window.open('adminhome.php','_self')</script>";
            }else{
                echo "error".mysqli_error($conn);
            }
            mysqli_close($conn);
        }
    }
?>