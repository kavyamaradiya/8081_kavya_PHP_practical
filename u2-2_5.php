<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var= "12345";
        echo "<b>Original value:</b>" . $var . "<br>";
        echo "<b> Original Data Type:</b>" . gettype($var) . "<br><br>";

        settype($var, "integer");
        echo "<b>After type casting:</b>" . $var . "<br>";
        echo "<b>New data type:</b>" . gettype($var) . "<br><br>";

        settype($var, "double");
        echo "<b>After converting to double:</b>" . $var . "<br>";
        echo "<b> data type:</b>" . gettype($var) . "<br><br>";

        settype($var, "boolean");
        echo "<b> Afer converting to boolean:<\b>";

        var_dump($var);
        echo "<br><b>Data Type:<\b>" . gettype($var);

    ?>
</body>
</html>