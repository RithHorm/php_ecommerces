<!-- Page Preloder -->
<div id="preloder">
      <div class="loader"></div>
    </div>


    <?php 
    $current_page = basename($_SERVER['PHP_SELF']);
    
    ?>
    
<header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7">
              <div class="header__top__left">
                <p>Free shipping, 30-day return or refund guarantee.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-5">
              <div class="header__top__right">
                <div class="header__top__links">
                  <a href="/php-rest-api/FrontEnd/phpecommerces/log-out.php">Log Out</a>
                  <a href="#">FAQs</a>
                </div>
                <div class="header__top__hover">
                  <span>Usd <i class="arrow_carrot-down"></i></span>
                  <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="header__logo">
              <a href="./index.php"><img src="img/logo.png" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <nav class="header__menu mobile-menu">
              <ul>
                <li class="<?= ($current_page == 'index.php') ? 'active' : ''?>"><a href="./index.php">Home</a></li>
                <li class="<?= ($current_page == 'shop.php') ? 'active' : ''?>"><a href="./shop.php">Shop</a></li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="dropdown">
                    <li><a href="./aboutUs.php">About Us</a></li>
                    <li><a href="./shop-detail.php">Shop Details</a></li>
                    <li><a href="./checkout.php">Check Out</a></li>
                  </ul>
                </li>
                <li class="<?= ($current_page == 'blog.php') ? 'active' : ''?>"><a href="./blog.php">Blog</a></li>
                <li class="<?= ($current_page == 'contact.php') ? 'active' : ''?>"><a href="./contact.php">Contacts</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="header__nav__option">
              <a href="#" class="search-switch"
                ><img src="img/icon/search.png" alt=""
              /></a>
              <a href="#"><img src="img/icon/heart.png" alt="" /></a>
              <a href="./cart.php"
                ><img src="img/icon/cart.png" alt="" /> <span>0</span></a
              >
              <div class="price">$0.00</div>
            </div>
          </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
      </div>
    </header>