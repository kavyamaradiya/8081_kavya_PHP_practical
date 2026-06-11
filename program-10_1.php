<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program10</title>
</head>
<body>
    <form method="get">

        <input type="text1" name="ar1[0]">
        <input type="text2" name="ar1[1]">
        <input type="text3" name="ar1[2]">
        
        <input type="text1" name="ar2[0]">
        <input type="text2" name="ar2[1]">
        <input type="text3" name="ar2[2]">

        <input type="submit" name="submit" value="submit"> 
    </form>
    <?php
    echo" merge odf array ";
    $num1=$_GET['ar1'];
    $num2=$_GET['ar2'];
    $mer=array_intersect($num1,$num2);
    foreach($mer as $m)
    {
        echo"$m <br>";
    }
    ?>
</body>
</html>