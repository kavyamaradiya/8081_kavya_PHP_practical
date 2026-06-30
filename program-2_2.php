<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program-2_2</title>
</head>
<body>
    <?php
            echo"sorting array"."<br>";
            
            $name=array("kavya","drashti","komal","krisha","priya"," riya");
            
            foreach($name as $ele){
                echo $ele."<br>";
            }
            echo "<br>"."after sorting"."<br>";

            sort($name);
            foreach($name as $ele1){
                echo $ele1 . "<br>";
            }
    ?>
</body>
</html>