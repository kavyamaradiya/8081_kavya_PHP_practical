<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program-3_2</title>
</head>
<body>
    <?php
        $conn = new PDO("mysql:host=localhost:3307;dbname=studentdb","root","");
        $sql = "INSERT INTO students4(name,email,city)
        VALUE ('kavya','kavya@gmail.com','rajkot')";
        
        $conn->exec($sql);
        echo"Record Inserted Sucessfully.";
    ?>
</body>
</html>