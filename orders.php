<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
    
  header("location:login.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ออเดอร์ของคุณ || HIM Anime Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">HIM Anime Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="about.php">เกี่ยวกับเรา</a></li>
          <li><a href="products.php">สินค้า</a></li>
          <li><a href="cart.php">ตะกร้าสินค้า</a></li>
          <li class="active"> <a href="orders.php">ออเดอร์สินค้า</a></li>
          <li><a href="contact.php">ติดต่อ</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>ออเดอร์สินค้าของคุณ</h3>
        <hr>

        <?php
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders where email='".$user."'");
          if($result) {
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
              echo '<p><h4>Order ID ->'.$obj->id.'</h4></p>';
              echo '<p><strong>วันที่ชื้อสินค้า</strong>: '.$obj->date.'</p>';
              echo '<p><strong>รหัสสินค้า</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>ชื่อสินค้า</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>ราคาสินค้า (ต่อชิ้น)</strong>: '.$obj->price.'</p>';
              echo '<p><strong>จำนวนสินค้า</strong>: '.$obj->units.'</p>';
              echo '<p><strong>ราคา รวมทั้งหมด</strong>: '.$currency.$obj->total.'</p>';
              //echo '</div>';
              //echo '<div class="large-6">';
              //echo '<img src="images/products/3.jpg">';
              //echo '</div>';
              echo '<p><hr></p>';

            }
          }
        ?>
      </div>
    </div>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; HIM Anime Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
