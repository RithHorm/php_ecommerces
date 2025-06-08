<?php 
include('../../BackEnd/config/db.php');
?>
<?php include "../phpecommerces/include/components/session.php"?>
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
            $query = "SELECT * FROM products";
            $statement = $pdo->prepare($query);
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            if($result){
              foreach($result as $row){
                ?>
                <!-- <p><?= $row['id']; ?></p> -->
                <div
            class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals"
          >
            <div class="product__item">
              <div
                class="product__item__pic set-bg p-0"
                data-setbg="../../ <?= $row['picture'] ?>"
              >
              <img src="../../BackEnd/<?= $row['picture']?>" alt="">

              
                <span class="label">New</span>
                <ul class="product__hover">
                  <li>
                    <a href="#"><img src="img/icon/heart.png" alt="" /></a>
                  </li>
                  <li>
                    <a href="#"
                      ><img src="img/icon/compare.png" alt="" />
                      <span>Compare</span></a
                    >
                  </li>
                  <li>
                    <a href="#"><img src="img/icon/search.png" alt="" /></a>
                  </li>
                </ul>
              </div>
              
              <div class="product__item__text">
                <h6><?= $row['name']?></h6>
                <a href="#" class="add-cart">+ Add To Cart</a>
                <h5>$<?= $row['price']; ?></h5>
                <div class="product__color__select">
                  <label for="pc-1">
                    <input type="radio" id="pc-1" />
                  </label>
                  <label class="active black" for="pc-2">
                    <input type="radio" id="pc-2" />
                  </label>
                  <label class="grey" for="pc-3">
                    <input type="radio" id="pc-3" />
                  </label>
                </div>
              </div>
            </div>
          

          </div>
                <?php
              }
            }
            else
            {
              ?>
              <h3>No product found</h3>
              <?php
            }

          ?>
          </div>
        </div>
      </div>
    </section>