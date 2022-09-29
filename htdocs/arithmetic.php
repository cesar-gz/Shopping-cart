<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        $a = 4;
        $b = 8;
        $c = 7;

        $result = $a + $b + $c; echo "Addition : $result <br>";
        $result = $a - $b - $c; echo "Subtraction : $result <br>";
        $result = $a * $b * $c; echo "Multiplication : $result <br>";
        $result = $a / $b / $c; echo "Division : $result <br>";
        $result = $a % $b % $c; echo "Modulo : $result <br>";

        $a++; echo "Increment : $a <br>";
        $b--; echo "Decrement : $b <br>";

    ?>
</body>
</html>