<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./include/components/head.php" ?>
    <title>Thank You</title>
</head>
<body>
    <?php include "./include/components/header.php" ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Order Complete</h4>
                        <div class="breadcrumb__links">
                            <a href="index.php">Home</a>
                            <span>Thank You</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Thank You Section Begin -->
    <section class="checkout spad">
        <div class="container text-center">
            <div class="checkout__order">
                <h2>🎉 Thank You for Your Order!</h2>
                <p>Your payment has been successfully processed via PayPal.</p>
                <p>We’re now preparing your order and will update you once it ships.</p>
                <a href="shop.php" class="site-btn mt-4">Continue Shopping</a>
            </div>
        </div>
    </section>
    <!-- Thank You Section End -->

    <?php include "./include/components/footer.php" ?>
</body>
</html>
