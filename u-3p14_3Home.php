<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo "<h2> Home Page </h2>";
            if(isset($_COOKIE['username']));
            {
                echo "Welcome : " .$_COOKIE['username'];
            }
            else
            {
                echo "Cookie Not FOund";
            }
            echo "<br><br>";
            echo "<a a href='itu3p14_1Cookie.html'> Go to Back </a>";
        ?>
    </body>
</html>