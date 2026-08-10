<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method= "POST";>
        <input type="number" name="num1" placeholder="enter the first num" required><br>
        <input type="number" name="num2" placeholder="enter the second num" required><br>

        operation:
        <select name="op" required>
        <option value="+"> Addition</option>
        <option value="-"> Substraction</option>
        <option value="*"> multiplication</option>
        <option value="/"> division</option>
        </select><br><br>

        <input type="submit" name="submit" values="calculate">
    </form>
        <?php
            function calculate($num1, $num2, $op) {
            switch($op){
                case '+':
                    return $num1 + $num2;

                case '-':
                    return $num1 - $num2;

                case '*':
                    return $num1 * $num2;

                case '/':
                    return $num2 !=0 ? $num1 / $num2 : "Cannot Divide by zero";

                default:
                    return "invalid Operation";
                
                }   
            }
            if (isset($_POST['submit'])){
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $op = $_POST['op'];
                $result=calculate($n1,$n2,$op);
                echo"<h3>Answer =" .$result."</h3>";
            }
        ?>
</body>
</html>