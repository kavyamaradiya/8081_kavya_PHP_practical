<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program2.2</title>
</head>
<body>
    <?php
        echo "months of week using associative array ";
        $months=array("Jan=>31","Feb=>29","Mar=>31","Apr=>30","May=>31");
        foreach($months as $m)
        {
            echo $m. "<br>";
        }
    ?>  
</body>
</html>