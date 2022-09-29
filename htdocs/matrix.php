<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        $letters = array('A', 'B', 'C', 'D');
        $numbers = array( 1, 2, 3, 4);
        $matrix=
            array('Letter' => $letters, 'Number' => $numbers);

        echo "<p>Start: {$matrix['Letter'][0]} </p>";

        foreach( $matrix as $array => $list){
            echo '<ul>';
            foreach($list as $key => $value){
                echo "<li>$array [$key] = $value";
            }
            echo '</ul>';
        }
    ?>
</body>
</html>