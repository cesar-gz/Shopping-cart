<?php

    session_start();

    if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
    }

    $page_title = 'Goodbye';
    include('includes/header.html');

    $_SESSION = array();

    session_destroy();

    echo '<h1>Goodbye! Thanks for shopping and posting!</h1>'
?>

<div class="content">
    <p>You are now logged out.</p>
</div>

<div class="content">
    <p><a href="login.php">Login</a></p>
</div>

<?php
    include('includes/footer.html');
?>
