<?php $this->view("header", $data); ?>

<!-- Devlopment by Souvik starts -->
<!-- <script>
  const colors = <?php echo json_encode($data['availableColors']); ?>;

  const sizes = <?php echo json_encode($data['availableSizes']); ?>;
</script> -->
<style>
  .colorPallete {
    display: flex;
  }

  .color {
    border-radius: 50%;
    width: 20px;
  }

  button.size {
    font-size: 15px;
  }

  .sizePallete {
    display: flex;
    gap: 11px;

  }
</style>
<!-- below is the style for price qty color table  -->
<style>
  .button-container {
    display: flex;
    align-items: center;
  }

  tr {
    margin: 10px;
    padding: 25px;
    display: revert;
  }

  td {
    margin: 1px;
    padding: 23px;
    text-align: center;
  }

  .button-container .form-control {
    max-width: 80px;
    text-align: center;
    display: inline-block;
    margin: 0px 5px;
  }

  #myTable .form-control {
    width: auto;
    display: inline-block;
    text-align: center;
  }

  .cart-qty-plus,
  .cart-qty-minus {
    width: 38px;
    height: 38px;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
  }

  .cart-qty-plus:hover,
  .cart-qty-minus:hover {
    background-color: #5161ce;
    color: #fff;
  }

  .img-prdct {
    width: 50px;
    height: 50px;
    /* 	background-color: #5161ce; */
    border-radius: 4px;
  }

  .img-prdct img {
    width: 100%;
  }

  @media screen and (max-width:880px) {

    .product-featured .showcase-wrapper {
      display: flex;
      align-items: center;
      gap: 20px;
      overflow-x: auto;
      overscroll-behavior-inline: none;
      scroll-snap-type: none;
    }

    .product-featured .showcase-container {
      min-width: 100%;
      padding: 30px;
      border: none;
      border-radius: var(--border-radius-md);
      scroll-snap-align: start;
    }
  }

  @media screen and (max-width:420px) {

    .product-featured .showcase-wrapper {
      display: flex;
      align-items: center;
      gap: 20px;
      overflow-x: auto;
      overscroll-behavior-inline: none;
      scroll-snap-type: none;
    }

    .product-featured .showcase-container {
      min-width: 100%;
      padding: 30px;
      border: none;
      border-radius: var(--border-radius-md);
      scroll-snap-align: start;
    }

    .cart-qty-plus,
    .cart-qty-minus {
      width: 22px;
      height: 22px;
      background-color: #fff;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    #myTable .form-control {
      width: auto;
      display: inline-block;
      text-align: center;
      width: 44px;
      font-size: 14px;
    }
  }
</style>


<style>
  .swiper-android .swiper-slide,
  .swiper-wrapper {

    width: 422px;
  }

  .color-buttons {
    display: flex;
    flex-wrap: nowrap;
    /* Prevents buttons from wrapping to the next line */
  }
</style>
<!-- below is the style for price dropdown -->
<style>

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
                  <!-- Devlopment by Souvik starts -->
                  <div id="renderedColors">
                    <div class="colorPallete">
                      Colors: <?php foreach ($availableColors as $color) {
                                echo '<button class="' . $color['colorName'] . ' color"  colorValue="' . $color['colorId'] . '" style="margin-left:5px ; margin-top:5px ; border-radius: 10px ; background-color: ' . $color['hexCode'] . ';"> <button/>';
                              } ?>
                    </div>
                  </div>
                  <div id=" renderedSizes">
                    <div class="sizePallete">
                      Sizes: <?php foreach ($availableSizes as $size) {
                                echo '<button class="' . $size['sizeName'] . ' size"> ' . $size['sizeName'] . '<button/>';
                              } ?>
                    </div>
                  </div>


                  <!-- Devlopment by Souvik ends -->
                  <button class=" add-cart-btn">add to cart</button>

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
        <?php else : ?>
          <h2 class="title">THIS PRODUCT IS TEMPORARILY UNAVAILABLE</h2>
        <?php endif; ?>
      </div>


    </div>
  </div>
  <div class="product-container">


    <div class="product-featured">
      <!-- <div class="container">

        <h2 class="title">Shopping Cart</h2>
    </div> -->
      <div class="showcase-wrapper">
        <div class="showcase-container">
          <div class="showcase">
            <table id="myTable" class="table">
              <thead>
                <tr>
                  <th>COLOR</th>
                  <th>SIZE</th>
                  <th>QTY</th>
                  <th>PRICE</th>
                  <th class="text-right"><span id="amount" class="amount">AMOUNT</span> </th>
                  <th>REMOVE</th>
                </tr>
              </thead>
              <tbody>
                <tr class="itemRow">
                  <td class="colorCell">
                  <?php foreach ($availableColors as $color) {
                                echo '<button class="' . $color['colorName'] . ' color"  colorValue="' . $color['colorId'] . '" style="margin-left:5px ; margin-top:5px ; border-radius: 10px ; background-color: ' . $color['hexCode'] . ';"> <button/>';
                              } ?>
                  </td>
                  <td class="sizeCell">
                    <p></p>

                  </td>
                  <td>
                    <input type="hidden" class="productId" style="display: none;" name="productIdValue" value="" />
                    <div class="button-container">
                      <button class="cart-qty-plus" type="button" value="+">+</button>
                      <input id="qtyValIs" type="text" name="qty" min="0" class="qty form-control" value="" />
                      <button class="cart-qty-minus" type="button" value="-">-</button>
                    </div>
                  </td>
                  <td class="priceCell">
                    <input type="text" value="" class="price form-control" disabled>
                  </td>
                  <td>$ <span id="amount" class="amount">0</span></td>
                  <td style="cursor: pointer; color:red" class="removeItem" onclick="">
                    <a href="">X</a>
                  </td>
                </tr>

              </tbody>
              <tfoot>
                <tr>
                  <td colspan="4"></td>
                  <td><strong>TOTAL = $ <span id="total" class="total">0</span></strong></td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
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

<!--
    - custom js link
  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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
<script>
  function handleResponse(event, response) {
    const renderElements = JSON.parse(response);
    const [size, color, quantity] = renderElements;


  }

  function asyncApiCall({
    itemId,
    size = "",
    color = ""
  } = {}) {
    const data = {
      itemId: itemId,
      ...(size && {
        size: size
      }),
      ...(color && {
        color: color
      })
    };
    $.ajax({
      method: "POST",
      url: "<?php ROOT ?>ajax_productDetails",
      data: data,
      success: function(response) {
        handleResponse(event, response)
        // put the response into the respective element

      }
    })
  }


  const colorClass = document.querySelectorAll(".color");

  colorClass.forEach(function(singleColor) {
    singleColor.addEventListener("click", function(e) {
      const clickedBtnClassName = e.target.className;
      const colorId = this.getAttribute("colorValue")


      console.log(colorId)
      console.log(clickedBtnClassName)

      // add an gray overlay to the selected color

      e.target.style.border = "3px solid gray";
      e.target.style.boxShadow = "0 0 10px rgba(0, 0, 0, 0.5), 0 0 20px rgba(0, 0, 0, 0.3), 0 0 30px rgba(0, 0, 0, 0.2)";

      // invoke the ajax function here
      // ajax function should get all the sizes of the sent color
      // dynamically render/changee the sizes 
      // add the result data to the div with id renderedSizes
    })

  })
</script>
<?php $this->view("footer", $data); ?>

<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>