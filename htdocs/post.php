<?php
    include('includes/header.html');
?>

<div class="content" style="padding-top:45px;">
  <?php

      session_start();

      if(!isset($_SESSION['user_id'])){
          require('login_tools.php');
          load();
      }

      $page_title = 'Post Message';

      echo '<form action="post_action.php" method="POST" accept-charset="utf-8">
            <p>Subject:<br>
            <input name="subject" type="text" size="64"></p>
            <p>Message:<br>
            <textarea name="message" rows="5" col="50">
            </textarea></p>
            <p><input type="submit" value="Submit" style="color:#FF9900; background-color: #cd451f; padding: 6px; margin-top: 6px; border-radius: 5px; border: solid 1px #FF9900; cursor:pointer;"></p>
            </form>';

      echo '<p style="position:absolute; top:70px;">
      <a href="forum.php">Forum</a> |
      <a href="shop.php">Shop</a> |
      <a href="home.php">Home</a> |
      <a href="goodbye.php">Logout</a></p>';

  ?>
</div>

<?php
      include('includes/footer.html');
?>
