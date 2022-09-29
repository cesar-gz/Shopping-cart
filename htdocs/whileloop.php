<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php

        $numbers = array(0,1,2,3,4,5,6,7,8,9,10);

        echo '<dt>While Loop : ';
        $i =0;
        while($i < 11){
            echo "<dd>Element $i = $numbers[$i]";
            $i++;
        }

        echo '<dt>Do While Loop : ';
        $i =0;
        do{
            echo "<dd>Element $i = $numbers[$i]";
            $i++;
        }while($i < 11);
    ?>
</body>
</html>