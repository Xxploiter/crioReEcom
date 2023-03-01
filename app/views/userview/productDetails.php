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
</style>
<!-- Devlopment by Souvik ends -->



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
                    <div class="colorPallete" ">
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
    <div class="purchaseList">
      <table id="myTable" class="table">
        <thead>
          <tr>
            <th>Color</th>
            <th>Size</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody>
          <form action="">
            <tr>
              <td><label for="color">Choose a color</label>

                <select name="color" id="color">
                  <?php foreach ($availableColors as $color) {
                    echo '<option value="' . $color['colorId'] . '">' . $color['colorName'] . '</option>';
                  } ?>
                </select>
              </td>
              <td> <label for="size">Choose a Size</label>

                <select name="size" id="size">
                  <?php foreach ($availableColors as $color) {
                    echo '<option value="' . $size['sizeId'] . '">' . $size['sizeName'] . '</option>';
                  } ?>
                </select>
              </td>
              <td>
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" max="50">
              </td>
              <!-- <td>amm</td>
                        <td>*</td> -->
            </tr>
          </form>
        </tbody>
      </table>
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
    // function getSizesFromaJax() {
    //   const xhr =new XMLHttpRequest();

    //   xhr.open('POST','',true);
    //   xhr.onload=function(){
    //     if(this.status===200){

    //     }else{
    //       console.error("some error occured")
    //     }
    //   }
    //   xhr.send();
    // }
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