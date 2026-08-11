<!DOCTYPE html>
<html lang="en">
    <?php
        $conn = mysqli_connect("localhost","root","iiyaa@3573","studentdb");
        if(isset($_POST['insert']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "INSERT INTO students (name,email) VALUES ('$name','$email')";
            mysqli_query($conn,$sql);
            //echo '<script>alert("Record Inserted")</script>';
        }
        if(isset($_POST['update']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $sql = "UPDATE students SET name='$name', email='$email' WHERE id=$id";
            mysqli_query($conn,$sql);
            //echo '<script>alert("Record Updated")</script>';
        }
        if(isset($_POST['delete']))
        {
            $id = $_POST['id'];
            $sql = "DELETE FROM students WHERE id=$id";
            mysqli_query($conn,$sql);
            //echo '<script>alert("Record Deleted")</script>';
        }        

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP CRUD</title>
</head>
<body>
    <h2>PHP CRUD Operations (Insert, Update, Delete, View) </h2>

    <form method="post">
        ID (for update/delete): <input type="number" name="id">  <br><br>
        Name: <input type="text" name="name">  <br><br>
        Email: <input type="email" name="email">  <br><br>

        <input type="submit" name="insert" value="insert">
        <input type="submit" name="update" value="update">
        <input type="submit" name="delete" value="delete">


        <h3> Student Records </h3>
        <?php
            $result =mysqli_query($conn,"SELECT * FROM students");
            echo "<table border ='1' cellpaddings='5'>
                    <tr>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Email </th>";
            while ($row = mysqli_fetch_assoc($result))
            {
                echo"<tr>
                        <td> {$row['id']} </td>
                        <td> {$row['name']} </td>
                        <td> {$row['email']} </td>
                    </tr>";
            }
            echo "</table>";
        ?>
</body>
</html>