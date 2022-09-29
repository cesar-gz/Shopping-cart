<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        # String time

        $phrase = 'the truth is rarely pure';
        $author = 'Oscar Widle';

        echo $phrase;

        echo "<p>It is often said that <q>$phrase</q> </p>" ;

        $phrase = $phrase . ' and never simple';

        echo "<p><q>$phrase</q><cite>$author</cite></p>";
    ?>
</body>
</html>