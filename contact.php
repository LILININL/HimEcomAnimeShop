<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ติดต่อเรา || HIM Anime Shop</title>
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
                <li class="active"><a href="contact.php">ติดต่อเรา</a></li>
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




    <div class="row" style="margin-top:30px;">
        <div class="small-12">
            <center><img src="images/9.jpg"> <p></p>
            <p>สามารถติดต่อผมผ่านทาง Email <a href="mailto:support@gmail.com">    himchumwong@gmail.com</a>  หรือ
            สามารถติดต่อผมผ่านทาง Facebook <a href="https://www.facebook.com/aphipart.chumwong.9">   Ahipart Chumwong</a></p>
            </center><footer>
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
