<?php
/* ปิดการแสดงว่าฟังชั่น redirect รีเฟซผิดพลาดทั้งๆที่ ก็ รันได้แต่แจ้งว่าโค้ดผิด ผมก็คิดว่ามันรันได้ ไม่น่าผิดแต่มันก็แจ้งเลยปิดมันซะ!  */
error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HIM Anime Shop</title>
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
        </ul>
      </section>
    </nav>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <p>การสั่งชื้อสินค้าสำเร็จ ! ขอบคุณที่เลือกชื้อสินค้าของเรา!</p>
        <p>ระบบได้ส่ง E-mail ใบเสร็จชำระเงิน โปรดตรวจสอบที่ อีเมลขยะ หากไม่ได้รับ E-mail โปรดติดต่อเรา</p>
        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; HIM Anime Shop. All Rights Reserved.</p>
        </footer>
        <?php
          function redirect() {
          header("Refresh: 2; url=orders.php");
          }
          ?>
        <?php  $flag {
          redirect()
            }
        
          ?>
      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
