<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])) {
  header("location:index.php");
}

if($_SESSION["type"]!="admin") {
  header("location:index.php");
}

include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin || HIM Anime Shop</title>
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
                <li><a href="orders.php">ออเดอร์สินค้า</a></li>
                <li><a href="contact.php">ติดต่อเรา</a></li>
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
            <h3>Hey Admin!</h3>
            <?php
          $result = $mysqli->query("SELECT * from products order by id asc");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="large-4 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>รหัสสินค้า</strong>: '.$obj->product_code.'</p>';
              echo '<p><strong>รายละเอี่ยดสินค้า</strong>: '.$obj->product_desc.'</p>';
              echo '<p><strong>สินค้า คงเหลือ</strong>: '.$obj->qty.'</p>';
              echo '<div class="large-6 columns" style="padding-left:0;">';
              echo '<form method="post" name="update-quantity" action="admin-update.php">';
              echo '<p><strong>เพิ่มจำนวนสินค้า</strong>:</p>';
              echo '</div>';
              echo '<div class="large-6 columns">';
              echo '<input type="number" name="quantity[]"/>';
              echo '</div>';
              echo '</div>';
            }
          }
        ?>



        </div>
    </div>


    <div class="row" style="margin-top:10px;">
        <div class="small-12">
            <center>
                <p><input style="clear:both;" type="submit" class="button" value="เพิ่มจำนวนสินค้า"></p>
            </center>
            
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
