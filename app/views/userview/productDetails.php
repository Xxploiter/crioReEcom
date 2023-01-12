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
  <div class="blog">
  

<div class="container">
<h2 class="title">Recommendations according to your recent purchase</h2>

  <div class="blog-container has-scrollbar">

    <div class="blog-card">

      <a href="#">
        <img src="<?php echo ASSETS . THEME  ?>images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
      </a>

      <div class="blog-content">

        <a href="#" class="blog-category">Clothes/Womens/Fashion</a>

        <a href="#">
          <h3 class="blog-title">Jackets Denim jackets.</h3>
        </a>

        <p class="blog-meta">
          <!-- By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time> -->
        </p>

      </div>

    </div>

    <div class="blog-card">

      <a href="#">
        <img src="<?php echo ASSETS . THEME  ?>images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
      </a>

      <div class="blog-content">

        <a href="#" class="blog-category">Clothes/Womens/Clothes</a>

        <h3>
          <a href="#" class="blog-title">Women tops summer.</a>
        </h3>

        <p class="blog-meta">
          <!-- By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time> -->
        </p>

      </div>

    </div>

    <div class="blog-card">

      <a href="#">
        <img src="<?php echo ASSETS . THEME  ?>images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner" width="300">
      </a>

      <div class="blog-content">

        <a href="#" class="blog-category">Clothes/Womens/Shoes</a>

        <h3>
          <a href="#" class="blog-title">Lacy one piece.</a>
        </h3>

        <p class="blog-meta">
          <!-- By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time> -->
        </p>

      </div>

    </div>

    <div class="blog-card">

      <a href="#">
        <img src="<?php echo ASSETS . THEME  ?>images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
      </a>

      <div class="blog-content">

        <a href="#" class="blog-category">Clothes/Womens/Electronics</a>

        <h3>
          <a href="#" class="blog-title">Denim jeans tight</a>
        </h3>

        <p class="blog-meta">
          <!-- By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time> -->
        </p>

      </div>

    </div>

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