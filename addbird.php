
<?php
    session_start();
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Animal</title>
    <link rel="stylesheet" href="css/style7.css">
</head>

<body>
    <form action="processanimal.php" method="POST">
        <div class="div1">
            <label for="Name">Bird Name</label><br>
            <input type="text" name="Bname" required><br>
            <label for="Name">Species</label><br>
            <input type="text" name="Species" required><br>
            <label for="Name">Gender</label><br>
            <input type="text" name="Gender" required><br>
            <label for="Name">Description</label><br>
            <input type="text" name="description" required><br>
            <label for="Name">Image</label><br>
            <input type="file" name="img" required><br>
           
            <button type="submit" name="submit" value="submit" id="i1">Submit</button>
        </div>
    </form>
</body>
</html>
