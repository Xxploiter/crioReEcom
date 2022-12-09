<?php $this->view("header", $data); ?>





<style>
  .swiper-android .swiper-slide,
  .swiper-wrapper {

    width: 422px;
  }
</style>



<!--
            - PRODUCT FEATURED
          -->
<div class="main">
  <div class="product-container">

    <div class="container">

      <div class="product-featured ">

        <h2 class="title">Deal of the day</h2>
        <?php if ($singleProductDetails) : ?>
          <!-- below had class has-scollbar -->
          <div class="showcase-wrapper">

            <div class="showcase-container">

              <div class="showcase">

                <div class="showcase-banner">
                  <div class="swiper mynewSwiper">
                    <div class="swiper-wrapper">
                      <img src="<?= ROOT .   $singleProductDetails->image1 ?>" alt="shampoo, conditioner & facewash packs" class="showcase-img swiper-slide">
                      <img src="<?php echo ASSETS . THEME  ?>images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img swiper-slide">
                      <img src="<?php echo ASSETS . THEME  ?>images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img swiper-slide">

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>

                </div>

                <div class="showcase-content">

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <a href="#">
                    <h3 class="showcase-title"><?= $singleProductDetails->name ?></h3>
                  </a>

                  <p class="showcase-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet consectetur Lorem ipsum dolor
                  </p>

                  <div class="price-box">
                    <p class="price">$<?= $singleProductDetails->price ?></p>

                    <del>$200.00</del>
                  </div>

                  <button class="add-cart-btn">add to cart</button>

                  <div class="showcase-status">
                    <div class="wrapper">
                      <p>
                        already sold: <b>20</b>
                      </p>

                      <p>
                        available: <b>40</b>
                      </p>
                    </div>

                    <div class="showcase-status-bar"></div>
                  </div>

                  <div class="countdown-box">

                    <p class="countdown-desc">
                      Hurry Up! Offer ends in:
                    </p>

                    <div class="countdown">

                      <div class="countdown-content">

                        <p class="display-number">360</p>

                        <p class="display-text">Days</p>

                      </div>

                      <div class="countdown-content">
                        <p class="display-number">24</p>
                        <p class="display-text">Hours</p>
                      </div>

                      <div class="countdown-content">
                        <p class="display-number">59</p>
                        <p class="display-text">Min</p>
                      </div>

                      <div class="countdown-content">
                        <p class="display-number">00</p>
                        <p class="display-text">Sec</p>
                      </div>

                    </div>

                  </div>

                </div>

              </div>

            </div>
          </div>
          <?php else: ?>
            <h2 class="title">THIS PRODUCT IS TEMPORARILY UNAVAILABLE</h2>
        <?php endif; ?>
      </div>


    </div>
  </div>
</div>

<?php $this->view("footer", $data); ?>
<!--
    - custom js link
  -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo ASSETS . THEME  ?>js/script.js"></script>
<script>
  var swiper = new Swiper(".mynewSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>