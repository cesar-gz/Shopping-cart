<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Getting Started with PHP</title>
</head>

<body>
    <?php
        if( !empty ($_POST['quantity'])){
            $quantity = $_POST['quantity'];
            if( !is_numeric($quantity)){
                $quantity = NULL;
                echo 'Quantity must be numeric. Not alpha.<br>';
            }
        }
        else{
            $quantiy = NULL;
            echo 'You must enter a quantity<br>';
        }

        if( !empty ($_POST['email'])){
            $email = $_POST['email'];

            $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}\b/';
            if(!preg_match($pattern, $email)){
                $email=NULL;
                echo 'Email address is incorrect format';
            }

            if(($quantity != NULL) && ($email != NULL)){
                echo "Email: $email<br>Quantity: $quantity";
            }

        }
        else{
            $email = NULL;
            echo 'You must enter an email address.';
        }
    ?>
</body>
</html>