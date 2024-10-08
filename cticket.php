<?php

    include "connection.php";
   
    $query = "select * from ticket where tid='15'";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);
    $result = $data;

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style3.css">
    </head>
    <body>
    <div class="b61"> 
    <table border="1">
        <thead>
            <tr>
                <th scope="col" class="table1">Sl No</th>
                <th scope="col" class="table1">Ticket Name</th>
                <th scope="col" class="table1">Date</th>
                <th scope="col" class="table1">Time</th>
                <th scope="col" class="table1">Delete</th>
            </tr>

            </thead>

            <tbody>

                <?php 
            if($result){
                $i=4;
                if($result = mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                    <td class='c1'>".$i."</td>
                        <td class='c1'>".$result['name']."</td>
                        <td class='c1'>".$result['date']."</td>
                        <td class='c1'>".$result['time']."</td>
                        <td class='c1'><a href='deleteticket.php?rn=$result[tid]' onclick='showPrompt()' class='btn2'>Delete</a></td>
                        </tr> ";
                    }
                }?>
            </tbody>
    </table>
      </div>
             <script>
        function showPrompt() 
        {
            alert("Ticket Deleted Successfully..!");
        }
    </script>
</body>
</html>