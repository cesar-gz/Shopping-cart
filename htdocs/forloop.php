<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        for( $i =1; $i <7; $i++){
            echo "<dt> Outer Loop iteration $i";

            for($j =1; $j <6; $j++){
                echo "<dd>Inner loop iteration $j";
            }

        }
        
    ?>
</body>
</html>