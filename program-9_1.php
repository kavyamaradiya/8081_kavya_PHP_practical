<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program-8.1</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>

    <form method="get">
        <input type="text1" name="uname1">
        <input type="text2" name="uname2">
        <input type="text3" name="uname3">
        <input type="submit" name="submit" value="submit"> 
    </form>
    
    <?php
        echo" array reversing <br>";
        $num=array(12,34,76,59,45);
        $rev=array_reverse($num);
        foreach($rev as $r)
        {
            echo"$r <br>";
        }
    ?>
</body>
</html>