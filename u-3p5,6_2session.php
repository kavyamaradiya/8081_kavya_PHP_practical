<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['create']))
        {
            $_SESSION['username'] =$_POST['username'];
            echo"<h1>session created..! <br> Username:" .$_SESSION['username']."</h1>";
        
        }
        if(isset($_POST['destory']))
        {
            session_unset();
            session_destory();

            echo"<h1>session destory!</h1>";
        }
        echo"<br> <a herf='itu3p56_1session.html'> GO TO BACK </a>";
    ?>
</body>
</html>