<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
    }

    $page_title = 'Forum';
    include('includes/header.html');

    require('../connect_db.php');
?>

<div class="content">
    <p>
      <a href="post.php">Post Message</a> |
      <a href="shop.php">Shop</a> |
      <a href="home.php">Home</a> |
      <a href="goodbye.php">Logout</a>
    </p>
</div>

<div class="content">
  <?php
      $q = "SELECT * FROM forum";
      $r = mysqli_query($dbc, $q);
      if(mysqli_num_rows($r)>0){
          echo '<table style="background: #26120d; position: relative; ">
                <tr>
                  <th style="color:#FF9900; text-align:center;">Subject</th>
                  <th style="color:#FF9900; text-align:center;" id = "msg">Message</th>
                  <th style="color:#FF9900; text-align:center;">Posted By</th>
                </tr>';
          while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
              echo '<tr>
                    <td style="background: #57291d; color:#f8e293; text-align:center;">'.$row['subject'].'</td>
                    <td style="background: #57291d; color:#ff9376;">'.$row['message'].'</td>
                    <td style="background: #57291d; color:#f8a993; text-align:center;">'.$row['first_name'].''.$row['last_name'].'<br>'.$row['post_date'].'</td>
                    </tr>
              ';
          }
          echo '</table>';
      }
      else{
          echo '<p>There are currently no messages. Why not add some?</p>';
      }

      mysqli_close($dbc);
  ?>
</div>

<?php
    include('includes/footer.html');
?>
