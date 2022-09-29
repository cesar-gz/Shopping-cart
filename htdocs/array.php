<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        $days = array( 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        
        foreach($days as $value){ echo "&bull; $value " ; }

        $months = array( 'jan'=>'January',
                         'feb'=>'Febuary',
                         'mar'=>'March',
                         'apr'=>'April',
                         'may'=>'May');

        echo '<dl>';
        foreach( $months as $key => $value )
        { echo "<dt>$key<dd>$value";}
        echo '</dl>';

    ?>
</body>
</html>