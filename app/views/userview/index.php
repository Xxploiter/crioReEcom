<?php $this->view("header", $data); ?>
<!-- before showing the header i have to be careful as include wont work as i am still in the home class so i can utilize the view function to show  -->
<style>
  body>main>div.product-container>div>div.sidebar.has-scrollbar>div.wrapper {
    margin-bottom: 1rem;
    width: 15rem;
  }

  body>main>div.product-container>div>div.sidebar.has-scrollbar>div.wrapper>div.price-input>div:nth-child(3)>span {
    font-size: 14px;
  }

  body>main>div.product-container>div>div.sidebar.has-scrollbar>div.wrapper>div.price-input>div:nth-child(1)>span {
    font-size: 14px;
  }

  .price-input {
    width: 100%;
    display: flex;
    margin: 30px 0 10px;
  }

  .price-input .field {
    display: flex;
    width: 100%;
    height: 45px;
    align-items: center;
  }

  .field input {
    width: 100%;
    height: 69%;
    outline: none;
    font-size: 10px;
    margin-left: 12px;
    border-radius: 5px;
    text-align: center;
    border: 1px solid #999;
    -moz-appearance: textfield;
  }

  input[type="number"]::-webkit-outer-spin-button,
  input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }

  .price-input .separator {
    width: 326px;
    display: flex;
    font-size: 19px;
    align-items: center;
    justify-content: center;
  }

  .slider {
    height: 5px;
    position: relative;
    background: #ddd;
    border-radius: 5px;
  }

  .slider .progress {
    height: 100%;
    left: 25%;
    right: 25%;
    position: absolute;
    border-radius: 5px;
    background: hsl(353, 100%, 78%);
  }

  .range-input {
    position: relative;
  }

  .range-input input {
    position: absolute;
    width: 100%;
    height: 5px;
    top: -5px;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    -moz-appearance: none;
  }

  input[type="range"]::-webkit-slider-thumb {
    height: 17px;
    width: 17px;
    border-radius: 50%;
    background: hsl(353, 100%, 78%);
    pointer-events: auto;
    -webkit-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
  }

  input[type="range"]::-moz-range-thumb {
    height: 17px;
    width: 17px;
    border: none;
    border-radius: 50%;
    background: #17A2B8;
    pointer-events: auto;
    -moz-appearance: none;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
  }
</style>
<!--
    - MAIN
  -->

<main>

  <!--
      - BANNER
    -->

  <div class="banner">

    <div class="container swiper mySwiper">

      <div class="swiper-wrapper">
        <div class="slider-item swiper-slide">

          <img src="<?php echo ASSETS . THEME  ?>images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Trending item</p>

            <h2 class="banner-title">Women's latest fashion sale</h2>

            <p class="banner-text">
              starting at &dollar; <b>20</b>.00
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>

        <div class="slider-item swiper-slide">

          <img src="<?php echo ASSETS . THEME  ?>images/banner-2.jpg" alt="modern sunglasses" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Trending accessories</p>

            <h2 class="banner-title">Modern sunglasses</h2>

            <p class="banner-text">
              starting at &dollar; <b>15</b>.00
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>

        <div class="slider-item swiper-slide">

          <img src="<?php echo ASSETS . THEME  ?>images/banner-3.jpg" alt="new fashion summer sale" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Sale Offer</p>

            <h2 class="banner-title">New fashion summer sale</h2>

            <p class="banner-text">
              starting at &dollar; <b>29</b>.99
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </div>





  <!--
      - CATEGORY
    -->

  <div class="category">

    <div class="container">

      <div class="category-item-container has-scrollbar">

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/dress.svg" alt="dress & frock" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Dress & frock</h3>

              <p class="category-item-amount">(53)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/coat.svg" alt="winter wear" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Winter wear</h3>

              <p class="category-item-amount">(58)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/glasses.svg" alt="glasses & lens" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Glasses & lens</h3>

              <p class="category-item-amount">(68)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/shorts.svg" alt="shorts & jeans" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Shorts & jeans</h3>

              <p class="category-item-amount">(84)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/tee.svg" alt="t-shirts" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">T-shirts</h3>

              <p class="category-item-amount">(35)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/jacket.svg" alt="jacket" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Jacket</h3>

              <p class="category-item-amount">(16)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/watch.svg" alt="watch" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Watch</h3>

              <p class="category-item-amount">(27)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

        <div class="category-item">

          <div class="category-img-box">
            <img src="<?php echo ASSETS . THEME  ?>images/icons/hat.svg" alt="hat & caps" width="30">
          </div>

          <div class="category-content-box">

            <div class="category-content-flex">
              <h3 class="category-item-title">Hat & caps</h3>

              <p class="category-item-amount">(39)</p>
            </div>

            <a href="#" class="category-btn">Show all</a>

          </div>

        </div>

      </div>

    </div>


  </div>





  <!--
      - PRODUCT
    -->

  <div class="product-container">

    <div class="container">


      <!--
          - SIDEBAR
        -->

      <div class="sidebar has-scrollbar" data-mobile-menu>

        <div class="sidebar-category">

          <div class="sidebar-top">
            <h2 class="sidebar-title">Category</h2>

            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>

          <ul class="sidebar-menu-category-list">

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/dress.svg" alt="clothes" width="20" height="20" class="menu-title-img">

                  <p class="menu-title">Clothes</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Shirt</p>
                    <data value="300" class="stock" title="Available Stock">300</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">shorts & jeans</p>
                    <data value="60" class="stock" title="Available Stock">60</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">jacket</p>
                    <data value="50" class="stock" title="Available Stock">50</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">dress & frock</p>
                    <data value="87" class="stock" title="Available Stock">87</data>
                  </a>
                </li>

              </ul>

            </li>

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/shoes.svg" alt="footwear" class="menu-title-img" width="20" height="20">

                  <p class="menu-title">Footwear</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Sports</p>
                    <data value="45" class="stock" title="Available Stock">45</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Formal</p>
                    <data value="75" class="stock" title="Available Stock">75</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Casual</p>
                    <data value="35" class="stock" title="Available Stock">35</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Safety Shoes</p>
                    <data value="26" class="stock" title="Available Stock">26</data>
                  </a>
                </li>

              </ul>

            </li>

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/jewelry.svg" alt="clothes" class="menu-title-img" width="20" height="20">

                  <p class="menu-title">Jewelry</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Earrings</p>
                    <data value="46" class="stock" title="Available Stock">46</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Couple Rings</p>
                    <data value="73" class="stock" title="Available Stock">73</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Necklace</p>
                    <data value="61" class="stock" title="Available Stock">61</data>
                  </a>
                </li>

              </ul>

            </li>

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/perfume.svg" alt="perfume" class="menu-title-img" width="20" height="20">

                  <p class="menu-title">Perfume</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Clothes Perfume</p>
                    <data value="12" class="stock" title="Available Stock">12 pcs</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Deodorant</p>
                    <data value="60" class="stock" title="Available Stock">60 pcs</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">jacket</p>
                    <data value="50" class="stock" title="Available Stock">50 pcs</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">dress & frock</p>
                    <data value="87" class="stock" title="Available Stock">87 pcs</data>
                  </a>
                </li>

              </ul>

            </li>

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/cosmetics.svg" alt="cosmetics" class="menu-title-img" width="20" height="20">

                  <p class="menu-title">Cosmetics</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Shampoo</p>
                    <data value="68" class="stock" title="Available Stock">68</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Sunscreen</p>
                    <data value="46" class="stock" title="Available Stock">46</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Body Wash</p>
                    <data value="79" class="stock" title="Available Stock">79</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Makeup Kit</p>
                    <data value="23" class="stock" title="Available Stock">23</data>
                  </a>
                </li>

              </ul>

            </li>

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/glasses.svg" alt="glasses" class="menu-title-img" width="20" height="20">

                  <p class="menu-title">Glasses</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Sunglasses</p>
                    <data value="50" class="stock" title="Available Stock">50</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Lenses</p>
                    <data value="48" class="stock" title="Available Stock">48</data>
                  </a>
                </li>

              </ul>

            </li>

            <li class="sidebar-menu-category">

              <button class="sidebar-accordion-menu" data-accordion-btn>

                <div class="menu-title-flex">
                  <img src="<?php echo ASSETS . THEME  ?>images/icons/bag.svg" alt="bags" class="menu-title-img" width="20" height="20">

                  <p class="menu-title">Bags</p>
                </div>

                <div>
                  <ion-icon name="add-outline" class="add-icon"></ion-icon>
                  <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                </div>

              </button>

              <ul class="sidebar-submenu-category-list" data-accordion>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Shopping Bag</p>
                    <data value="62" class="stock" title="Available Stock">62</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Gym Backpack</p>
                    <data value="35" class="stock" title="Available Stock">35</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Purse</p>
                    <data value="80" class="stock" title="Available Stock">80</data>
                  </a>
                </li>

                <li class="sidebar-submenu-category">
                  <a href="#" class="sidebar-submenu-title">
                    <p class="product-name">Wallet</p>
                    <data value="75" class="stock" title="Available Stock">75</data>
                  </a>
                </li>

              </ul>

            </li>

          </ul>

        </div>

        <div class="product-showcase">

          <h3 class="showcase-heading">best sellers</h3>

          <div class="showcase-wrapper">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME  ?>images/products/1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">baby fabric shoes</h4>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$5.00</del>
                    <p class="price">$4.00</p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME  ?>images/products/2.jpg" alt="men's hoodies t-shirt" class="showcase-img" width="75" height="75">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">men's hoodies t-shirt</h4>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$17.00</del>
                    <p class="price">$7.00</p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME  ?>images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75" height="75">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">girls t-shirt</h4>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$5.00</del>
                    <p class="price">$3.00</p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME  ?>images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75" height="75">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">woolen hat for men</h4>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$15.00</del>
                    <p class="price">$12.00</p>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>
        <div class="wrapper">

          <div class="price-input">
            <div class="field">
              <span>Min</span>
              <input type="number" class="input-min" value="2500">
            </div>
            <div class="separator">-</div>
            <div class="field">
              <span>Max</span>
              <input type="number" class="input-max" value="7500">
            </div>
          </div>
          <div class="slider">
            <div class="progress"></div>
          </div>
          <div class="range-input">
            <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
            <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
          </div>
        </div>
      </div>



      <div class="product-box">

        <!--
            - PRODUCT MINIMAL
          -->

        <div class="product-minimal">

          <div class="product-showcase">

            <h2 class="title">New Arrivals</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                    </a>

                    <a href="#" class="showcase-category">Clothes</a>

                    <div class="price-box">
                      <p class="price">$45.00</p>
                      <del>$12.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                    </a>

                    <a href="#" class="showcase-category">Clothes</a>

                    <div class="price-box">
                      <p class="price">$61.00</p>
                      <del>$9.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/clothes-3.jpg" alt="black floral wrap midi skirt" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                    </a>

                    <a href="#" class="showcase-category">Clothes</a>

                    <div class="price-box">
                      <p class="price">$76.00</p>
                      <del>$25.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                    </a>

                    <a href="#" class="showcase-category">Mens Fashion</a>

                    <div class="price-box">
                      <p class="price">$68.00</p>
                      <del>$31.00</del>
                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                    </a>

                    <a href="#" class="showcase-category">Winter wear</a>

                    <div class="price-box">
                      <p class="price">$61.00</p>
                      <del>$11.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                    </a>

                    <a href="#" class="showcase-category">Winter wear</a>

                    <div class="price-box">
                      <p class="price">$32.00</p>
                      <del>$20.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                    </a>

                    <a href="#" class="showcase-category">Jackets</a>

                    <div class="price-box">
                      <p class="price">$50.00</p>
                      <del>$25.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/shorts-1.jpg" alt="better basics french terry sweatshorts" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                    </a>

                    <a href="#" class="showcase-category">Shorts</a>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                      <del>$10.00</del>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="product-showcase">

            <h2 class="title">Trending</h2>

            <div class="showcase-wrapper  has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                    </a>

                    <a href="#" class="showcase-category">Sports</a>

                    <div class="price-box">
                      <p class="price">$49.00</p>
                      <del>$15.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                    </a>

                    <a href="#" class="showcase-category">Sports</a>

                    <div class="price-box">
                      <p class="price">$78.00</p>
                      <del>$36.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                    </a>

                    <a href="#" class="showcase-category">Party wear</a>

                    <div class="price-box">
                      <p class="price">$94.00</p>
                      <del>$42.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                    </a>

                    <a href="#" class="showcase-category">Sports</a>

                    <div class="price-box">
                      <p class="price">$54.00</p>
                      <del>$65.00</del>
                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                    </a>

                    <a href="#" class="showcase-category">Sports</a>

                    <div class="price-box">
                      <p class="price">$52.00</p>
                      <del>$55.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Boot With Suede Detail</h4>
                    </a>

                    <a href="#" class="showcase-category">boots</a>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                      <del>$30.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                    </a>

                    <a href="#" class="showcase-category">formal</a>

                    <div class="price-box">
                      <p class="price">$56.00</p>
                      <del>$78.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                    </a>

                    <a href="#" class="showcase-category">Casual</a>

                    <div class="price-box">
                      <p class="price">$50.00</p>
                      <del>$55.00</del>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

          <div class="product-showcase">

            <h2 class="title">Top Rated</h2>

            <div class="showcase-wrapper  has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                    </a>

                    <a href="#" class="showcase-category">Watches</a>

                    <div class="price-box">
                      <p class="price">$50.00</p>
                      <del>$34.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                    </a>

                    <a href="#" class="showcase-category">Jewellery</a>

                    <div class="price-box">
                      <p class="price">$84.00</p>
                      <del>$30.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                    </a>

                    <a href="#" class="showcase-category">Perfume</a>

                    <div class="price-box">
                      <p class="price">$42.00</p>
                      <del>$10.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/belt.jpg" alt="men's leather reversible belt" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                    </a>

                    <a href="#" class="showcase-category">Belt</a>

                    <div class="price-box">
                      <p class="price">$24.00</p>
                      <del>$10.00</del>
                    </div>

                  </div>

                </div>

              </div>

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                    </a>

                    <a href="#" class="showcase-category">jewellery</a>

                    <div class="price-box">
                      <p class="price">$62.00</p>
                      <del>$65.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Smart watche Vital Plus</h4>
                    </a>

                    <a href="#" class="showcase-category">Watches</a>

                    <div class="price-box">
                      <p class="price">$56.00</p>
                      <del>$78.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">shampoo conditioner packs</h4>
                    </a>

                    <a href="#" class="showcase-category">cosmetics</a>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                      <del>$30.00</del>
                    </div>

                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php echo ASSETS . THEME  ?>images/products/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img" width="70">
                  </a>

                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                    </a>

                    <a href="#" class="showcase-category">jewellery</a>

                    <div class="price-box">
                      <p class="price">$20.00</p>
                      <del>$30.00</del>
                    </div>

                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>



        <!--
            - PRODUCT FEATURED
          -->

        <div class="product-featured">

          <h2 class="title">Deal of the day</h2>

          <div class="showcase-wrapper has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="<?php echo ASSETS . THEME  ?>images/products/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
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
                    <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                  </a>

                  <p class="showcase-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet consectetur Lorem ipsum dolor
                  </p>

                  <div class="price-box">
                    <p class="price">$150.00</p>

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

            <div class="showcase-container">

              <div class="showcase">

                <div class="showcase-banner">
                  <img src="<?php echo ASSETS . THEME  ?>images/products/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                </div>

                <div class="showcase-content">

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <h3 class="showcase-title">
                    <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                  </h3>

                  <p class="showcase-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet consectetur Lorem ipsum dolor
                  </p>

                  <div class="price-box">
                    <p class="price">$1990.00</p>
                    <del>$2000.00</del>
                  </div>

                  <button class="add-cart-btn">add to cart</button>

                  <div class="showcase-status">
                    <div class="wrapper">
                      <p> already sold: <b>15</b> </p>

                      <p> available: <b>40</b> </p>
                    </div>

                    <div class="showcase-status-bar"></div>
                  </div>

                  <div class="countdown-box">

                    <p class="countdown-desc">Hurry Up! Offer ends in:</p>

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

        </div>



        <!--
            - PRODUCT GRID
          -->
        <!-- IMP -->
        <div class="product-main">

          <h2 class="title">New Products</h2>

          <div class="product-grid">
            <!-- productsMainSection -->
            <?php if (is_array($productsMainSection)) : ?>
              <?php foreach ($productsMainSection as $singleMainProduct) : ?>
                <?php $this->view("singleProduct.inc", $singleMainProduct); ?>
              <?php endforeach; ?>
            <?php endif; ?>

          </div>

        </div>

      </div>

    </div>

  </div>





  <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

  <div class="mt-4">

    <div class="container">

      <div class="testimonials-box">


      </div>

    </div>

  </div>





  <!--
      - BLOG
    -->

  <!-- <div class="blog">

    <div class="container">

      <div class="blog-container has-scrollbar">

        <div class="blog-card">

          <a href="#">
            <img src="<?php echo ASSETS . THEME  ?>images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
          </a>

          <div class="blog-content">

            <a href="#" class="blog-category">Fashion</a>

            <a href="#">
              <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
            </a>

            <p class="blog-meta">
              By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
            </p>

          </div>

        </div>

        <div class="blog-card">

          <a href="#">
            <img src="<?php echo ASSETS . THEME  ?>images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
          </a>

          <div class="blog-content">

            <a href="#" class="blog-category">Clothes</a>

            <h3>
              <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
            </h3>

            <p class="blog-meta">
              By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
            </p>

          </div>

        </div>

        <div class="blog-card">

          <a href="#">
            <img src="<?php echo ASSETS . THEME  ?>images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner" width="300">
          </a>

          <div class="blog-content">

            <a href="#" class="blog-category">Shoes</a>

            <h3>
              <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
            </h3>

            <p class="blog-meta">
              By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
            </p>

          </div>

        </div>

        <div class="blog-card">

          <a href="#">
            <img src="<?php echo ASSETS . THEME  ?>images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
          </a>

          <div class="blog-content">

            <a href="#" class="blog-category">Electronics</a>

            <h3>
              <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
            </h3>

            <p class="blog-meta">
              By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
            </p>

          </div>

        </div>

      </div>

    </div>

  </div> -->

</main>
<!-- before showing the footer i have to be careful as include wont work as i am still in the home class so i can utilize the view function to show  -->
<?php $this->view("footer", $data); ?>




<!--
    - custom js link
  -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo ASSETS . THEME  ?>js/script.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
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
<script>
  const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
  let priceGap = 1000;
  priceInput.forEach(input => {
    input.addEventListener("input", e => {
      let minPrice = parseInt(priceInput[0].value),
        maxPrice = parseInt(priceInput[1].value);

      if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
        if (e.target.className === "input-min") {
          rangeInput[0].value = minPrice;
          range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
        } else {
          rangeInput[1].value = maxPrice;
          range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
        }
      }
    });
  });
  rangeInput.forEach(input => {
    input.addEventListener("input", e => {
      let minVal = parseInt(rangeInput[0].value),
        maxVal = parseInt(rangeInput[1].value);
      if ((maxVal - minVal) < priceGap) {
        if (e.target.className === "range-min") {
          rangeInput[0].value = maxVal - priceGap
        } else {
          rangeInput[1].value = minVal + priceGap;
        }
      } else {
        priceInput[0].value = minVal;
        priceInput[1].value = maxVal;
        range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
        range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
      }
    });
  });
</script>
</body>

</html>