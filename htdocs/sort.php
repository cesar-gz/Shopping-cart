<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        $cars = array('Dodge' => 'Viper',
                      'Chevrolet' => 'Camaro',
                      'Ford' => 'Mustang',
                      'Toyota' => 'Supra',
                      'Kia' => 'Optima',
                      'Tesla' => 'ModelX');
        
        echo '<dl><dt>Original Element Order :<dd>';
        foreach( $cars as $key => $value)
        { echo ' &bull; ', $key . '' . $value ;}

        asort( $cars );
        echo '<dt>Sorted into Value Order: <dd>';
        foreach($cars as $key => $value)
        { echo ' &bull; ', $key . '' . $value ;}

        ksort( $cars );
        echo '<dt>Sorted into Key Order: <dd>';
        foreach($cars as $key => $value)
        { echo ' &bull; ', $key . '' . $value ;}
    ?>
</body>
</html>