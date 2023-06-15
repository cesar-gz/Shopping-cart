<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        require('login_tools.php');
        load();
    }

    $page_title = 'Shop';
    include('includes/header.html');

    require('../connect_db.php');
?>

<div class="content">
  <p>
    <a href="cart.php">View Cart</a> |
    <a href="forum.php">Forum</a> |
    <a href="home.php">Home</a> |
    <a href="goodbye.php">Logout</a>
  </p>
</div>

<div class="content">
<?php
    $q = "SELECT * FROM shop";
    $r = mysqli_query($dbc,$q);
    if(mysqli_num_rows($r)>0){
        echo '<table style="background: black;"><tr>';
        while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            echo '<td style="background: #26120d; position: relative; text-align:center;">
                  <div style="background:black; color:yellow; border:solid 6px black;"><strong>' . $row['item_name'] . '</strong></div>
                  <br><div style="color:yellow; text-align:center;">$' . $row['item_price'] . '</div>
                  <br><div style="padding:8px; color:#f8a993;">' . $row['item_desc'] . '</div>
                  <br><a style="color:#FF9900; padding:4px; border: solid 1px yellow;" href="added.php?id=' . $row['item_id'] . '">Add to Cart</a>
                  <br><br><img src='.$row['item_img'] . '><br>
                  </td>';
        }
        echo '</tr></table>';
        mysqli_close($dbc);
    }
    else{
        echo '<p>There are currently no items in this shop.</p>';
    }
?>
</div>

<?php
    include('includes/footer.html');
?>
