<?php
session_start();
// unset($_SESSION['cart']);
include('../../BackEnd/config/db.php');
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// delete item
if (isset($_GET['remove'])) {
  $removeKey = $_GET['remove'];
  if (isset($_SESSION['cart'][$removeKey])) {
      unset($_SESSION['cart'][$removeKey]);
      header("Location: cart.php");
      exit();
  }
}
// Calculate total
$total = 0;
foreach ($_SESSION['cart'] as $item) {
    $total += $item['prod_price'] * $item['prod_qty'];
}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <?php include "./include/components/head.php" ?>
</head>
<body>
  <?php include "./include/components/header.php" ?>
  <!-- Header Section End -->

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-option">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb__text">
            <h4>Shopping Cart</h4>
            <div class="breadcrumb__links">
              <a href="./index.html">Home</a>
              <a href="./shop.html">Shop</a>
              <span>Shopping Cart</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Shopping Cart Section Begin -->
  <section class="shopping-cart spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="shopping__cart__table">
            <table>
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($_SESSION['cart'] as $key => $product): ?>
                <tr>
                  <td class="product__cart__item">
                    <div class="product__cart__item__pic w-25">
                      <img src="../../BackEnd/uploads/<?= $product['prod_image'] ?>" alt="" />
                    </div>
                    <div class="product__cart__item__text">
                      <h6><?= $product['prod_name'] ?></h6>
                      <h5>$<?= number_format($product['prod_price'], 2) ?></h5>
                    </div>
                  </td>
                  <td class="quantity__item">
                    <div class="quantity">
                      <div class="pro-qty-2">
                        <input type="text" value="<?= $product['prod_qty'] ?>" />
                      </div>
                    </div>
                  </td>
                  <td class="cart__price">$<?= number_format($product['prod_price'] * $product['prod_qty'], 2) ?></td>
                  <!-- <td class="cart__close"><i class="fa fa-close"></i></td> -->
                  <td class="cart__close">
                    <a href="cart.php?remove=<?= $key ?>" onclick="return confirm('Remove this item from cart?');">
                      <i class="fa fa-close"></i>
                    </a>
                  </td>

                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="continue__btn">
                <a href="#">Continue Shopping</a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="continue__btn update__btn">
                <a href="./index.php#product-section"><i class="fa fa-spinner"></i> Update cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cart__discount">
            <h6>Discount codes</h6>
            <form action="#">
              <input type="text" placeholder="Coupon code" />
              <button type="submit">Apply</button>
            </form>
          </div>
          <div class="cart__total">
            <h6>Cart total</h6>
            <ul>
              <li>Subtotal <span>$<?= number_format($total, 2) ?></span></li>
              <li>Total <span>$<?= number_format($total, 2) ?></span></li>
            </ul>
            <a href="./checkout.php" class="primary-btn">Proceed to checkout</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Shopping Cart Section End -->

  <!-- Footer Section Begin -->
  <?php include "./include/components/footer.php" ?>
  <!-- Footer Section End -->
   
</body>
</html>
