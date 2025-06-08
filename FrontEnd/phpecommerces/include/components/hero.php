<?php 
require_once __DIR__ . '/../../../../BackEnd/config/db.php'; 
$stmt = $pdo->query("SELECT * FROM slider WHERE status = 1 ORDER BY created_at DESC");
$sliders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="hero">
      <div class="hero__slider owl-carousel">
      <?php foreach ($sliders as $slider): ?>
        <div class="hero__items set-bg" data-setbg="http://localhost:8080/php-rest-api-latest/backend/sliderUploads/<?= htmlspecialchars($slider['image']) ?>">
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-7 col-md-8">
                <div class="hero__text text-white">
                  <h6><?= htmlspecialchars($slider['subtitle']) ?></h6>
                  <h2><?= htmlspecialchars($slider['title']) ?></h2>
                  <p>
                  <?= htmlspecialchars($slider['description']) ?>
                  </p>
                  <a href="#" class="primary-btn"
                    >Shop now <span class="arrow_right"></span
                  ></a>
                  <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>