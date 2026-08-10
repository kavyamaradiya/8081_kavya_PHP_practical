<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program-3_1</title>
</head>
<body>
    <?php
        $conn = new mysqli("localhost:3307","root","","studentdb");
        $sql = "INSERT INTO students3(name,email,city)
        VALUE ('kavya','kavya@gmail.com','rajkot')";
        if(mysqli_query($conn,$sql))
        {
            echo"Record Inserted Sucessfully.";
        }
        else
        {
            echo"Error";
        }
    ?>
</html>