<?php
session_start();

// Include function.php to handle JWT validation
require_once __DIR__ . '/include/components/function.php'; // Include the function file

// Call the function to verify JWT and get user data
$user = verifyJWTFromSession();

// If the user is not authenticated or not an admin, redirect to sign-in page
if ($user === null || $user->role !== 'user') {
    header("Location: sign-in.php");
    exit();
}
?>
<?php include "../phpecommerces/include/components/session.php"?>

<!DOCTYPE html>
<html lang="zxx">
<?php include"./include/components/head.php"?>  

  <body>
    

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
      <div class="offcanvas__option">
        <div class="offcanvas__links">
          <a href="#">Sign in</a>
          <a href="#">FAQs</a>
        </div>
        <div class="offcanvas__top__hover">
          <span>Usd <i class="arrow_carrot-down"></i></span>
          <ul>
            <li>USD</li>
            <li>EUR</li>
            <li>USD</li>
          </ul>
        </div>
      </div>
      <div class="offcanvas__nav__option">
        <a href="#" class="search-switch"
          ><img src="img/icon/search.png" alt=""
        /></a>
        <a href="#"><img src="img/icon/heart.png" alt="" /></a>
        <a href="#"><img src="img/icon/cart.png" alt="" /> <span>0</span></a>
        <div class="price">$0.00</div>
      </div>
      <div id="mobile-menu-wrap"></div>
      <div class="offcanvas__text">
        <p>Free shipping, 30-day return or refund guarantee.</p>
      </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
     <?php include"./include/components/header.php"?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php include "./include/components/hero.php" ?>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
     <?php include "./include/components/banner.php"?>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
     <?php include "./product.php"?>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <?php include "./include/components/category.php"?>
    <!-- Categories Section End --> 

    <!-- Instagram Section Begin -->
     <?php include"./include/components/instagramSec.php"?>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
   <?php include"./include/components/latestBlog.php"?>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
   <?php include "./include/components/footer.php"?>
    <!-- Footer Section End -->

    

    
  </body>
</html>
