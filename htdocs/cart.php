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

      $page_title = 'Cart';

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          foreach($_POST['qty'] as $item_id => $item_qty){
              $id = (int)$item_id;
              $qty = (int)$item_qty;

              if($qty == 0){
                  unset($_SESSION['cart'][$id]);
              }
              elseif($qty>0){
                  $_SESSION['cart'][$id]['quantity']=$qty;
              }
          }
      }

      $total = 0;

      if(!empty($_SESSION['cart'])){
          require('../connect_db.php');

          $q = "SELECT * FROM shop WHERE item_id IN (";
          foreach($_SESSION['cart'] as $id => $value){
              $q .= $id . ',';
          }
          $q = substr($q, 0, -1) . ') ORDER BY item_id ASC';
          $r = mysqli_query($dbc, $q);

          echo '<form action="cart.php method="POST"><table style="background: #26120d;">
                <tr><th style="color:#FF9900; text-align:center;" colspan="5">Items in your cart</th></tr><tr>';

          while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)){
              $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
              $total += $subtotal;

              echo "<tr>
                    <td style='background: #57291d; color:#f8e293;'>{$row['item_name']}</td>
                    <td style='background: #57291d; color:#f8a993;'>{$row['item_desc']}</td>
                    <td style='background: #57291d;'><input type=\"text\" size=\"3\"
                    name=\"qty[{$row['item_id']}]\"
                    value=\"{$_SESSION['cart'][$row['item_id']]['quantity']}\">
                    </td>
                    <td style='background: #57291d; padding:5px; color: #f8a993;'>each at {$row['item_price']} = </td>
                    <td style='background: #57291d; padding:5px; color: #f8e293;'>" .number_format($subtotal,2)."</td></tr>";
          }

          echo ' <tr><td style="background: #57291d; text-align:right; color:red;" colspan="5">
              Total = '.number_format($total, 2).'</td></tr>
              </table>
              <input
                  style="color:#FF9900; background-color: #cd451f; float:right; padding: 6px; margin-top: 6px; border-radius: 5px; border: solid 1px #FF9900;"
                  type="submit" value="Update My Cart">
              </form>';

          mysqli_close($dbc);

      }
      else{
          echo '<p>Your cart is currently empty.</p>';
      }

      echo '<p style="position:absolute; top:75px;">
              <a href="shop.php">Shop</a> |
              <a href="checkout.php?total='.$total.'">Checkout</a> |
              <a href="forum.php">Forum</a> |
              <a href="home.php">Home</a> |
              <a href="goodbye.php">Logout</a>
            </p>';


  ?>
</div>

<?php
      include('includes/footer.html');
?>
