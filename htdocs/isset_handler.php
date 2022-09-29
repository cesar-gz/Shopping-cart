<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>Producing Forms with PHP</title>
</head>

<body>
    <?php
        if ( isset( $_POST['definition'])){
            $definition = $_POST['definition'];
        }
        else{
            $definition = NULL;
        }

        if($definition != NULL){
            if($definition != 'Scripting'){
                echo "$definition is incorrect";
            }
            else{
                echo" $definition is correct";
            }
        }
        else{
            echo "You must select one answer";
        }
    ?>
</body>
</html>