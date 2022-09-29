<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        if (4>2) {echo '<p>Yes, 4 is greater than 2 <br>';}

        if ((4>2) && (8>4)) 
            {echo '<p>4 is greater than 2 and 8 is greater than 4<br>';}
        
        if (4>8) 
            {echo '<p>4 is greater than 8<br>';}
        else
            {echo '<p>4 is not greater than 8<br>';}

        if(4>8)
            {echo '<p>This line should not print</p>';}
        elseif(8>4)
            {echo '<p>8 is greater than 4</p>';}
        else
            {echo '<p>Both tests are false</p>';}

    ?>
</body>
</html>