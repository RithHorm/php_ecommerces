<?php include "../phpecommerces/include/components/session.php"?>
<?php

include('../../BackEnd/config/db.php');

if (isset($_POST['addToCartBtn'])) {
    // Extract product information
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productImage = $_POST['productImage'];
    $productPrice = $_POST['productPrice'];
    $productQty = $_POST['qty'];
    $productTotal = $_POST['total'];

    // Initialize cart if not already set
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product already exists in the cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['prod_id'] == $productId) {
            // If product already exists, update quantity
            $item['prod_qty'] += $productQty;
            // $item['prod_price'] += $productPrice;
            $item['prod_total']  += $productPrice;
            $found = true;
            break;
        }
    }

    // If product doesn't exist in the cart, add it
    if (!$found) {
        $_SESSION['cart'][] = [
            'prod_id' => $productId,
            'prod_name' => $productName,
            'prod_image' => $productImage,
            'prod_price' => $productPrice,
            'prod_qty' => $productQty,
            'prod_total' => $productTotal
        ];
    }
}

?>

<section class="product spad" id="product-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">
                    <li class="active" data-filter="*">Best Sellers</li>
                    <li data-filter=".new-arrivals">New Arrivals</li>
                    <li data-filter=".hot-sales">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">
            <?php 
            // Fetch products from the database
            $query = "SELECT * FROM products";
            $statement = $pdo->prepare($query);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                foreach ($result as $row) {
            ?>
            <!-- Product form -->
            <form class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals" method="post">
                <div class="product__item">
                    <div class="product__item__pic set-bg p-0" data-setbg="../../ <?= $row['picture'] ?>">
                    <img src="../../BackEnd/uploads/<?= $row['picture']?>" alt="">
                        <span class="label">New</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt="" /></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt="" /><span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt="" /></a></li>
                        </ul>
                    </div>

                    <div class="product__item__text">
                        <h6><?= $row['name']?></h6>
                        <input type="hidden" name="productId" value="<?= $row['id']?>">
                        <input type="hidden" name="productName" value="<?= $row['name']?>">
                        <input type="hidden" name="productImage" value="../../BackEnd/uploads/<?= $row['picture']?>">
                        <input type="hidden" name="productPrice" value="<?= $row['price']?>">
                        <input type="hidden" name="qty" value="1">
                        <input type="hidden" name="total" value="<?= $row['price']?>">
                        <a href=""><button type="submit" name="addToCartBtn" class="border-0 text-danger bg-transparent p-0">+ Add To Cart</button></a>
                        <h5>$<?= $row['price']; ?></h5>
                    </div>
                </div>
            </form>
            <?php
                }
            } else {
                ?>
                <h3>No product found</h3>
                <?php
            }
            ?>
        </div>
    </div>
</section>
