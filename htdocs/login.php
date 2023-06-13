<?php
    $page_title = 'Log In';
    include('includes/header.html');

    if(isset($errors) && !empty($errors)){
        echo '<p id="err_msg">Oops! There was a problem:<br>';
        foreach($errors as $msg){
            echo " - $msg<br>";
        }
        echo 'Please try again or <a href="register.php">Register<a></p>';
    }

?>
  <div class="content">
    <p><a href ="register.php">Click Here to Register</a>
  </div>
  <h1>Log In</h1>
  <div class="content">
    <form action="login_action.php" method="POST">
        <P>
            Email Address: <input type="text" name="email">
        </p><p>
            Password: <input type="password" name="pass">
        </p><p>
            <input type="submit" value="Login">
        </p>
    </form>
  </div>
<?php

    include('includes/footer.html');
?>
