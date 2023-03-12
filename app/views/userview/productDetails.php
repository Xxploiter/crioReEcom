<?php $this->view("header", $data); ?>

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

    .product-featured .showcase-container .allOrders {}
  }

  @media screen and (max-width:420px) {
    select.form-control {
      width: 78px !important;
      font-size: 10px !important;
      border: 2px solid var(--salmon-pink) !important;
      height: 33px !important;
      border-radius: 8px !important;
    }

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

    .showcase-container.allOrders {
      min-width: 181%;
      padding: 30px;
      border: none;
      border-radius: var(--border-radius-md);
      scroll-snap-align: start;
    }



    .button-container .form-control {
      max-width: 38px;
      text-align: center;
      display: inline-block;
      margin: 0px 5px;
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

    .showcaseVariation .add-cart-btn {
      background: var(--salmon-pink);
      padding: 7px 15px;
      color: var(--white);
      font-weight: var(--fs-9);
      font-weight: bolder;
      text-transform: uppercase;
      border-radius: var(--border-radius-md);
      margin-bottom: 32px;
      transition: var(--transition-timing);
      width: 70px;
      font-size: 5px;
    }
  }
</style>

<style>
  .add-cart-btn {
    background: var(--salmon-pink);
    padding: 8px 15px;
    color: var(--white);
    font-weight: var(--fs-9);
    font-weight: var(--weight-700);
    text-transform: uppercase;
    border-radius: var(--border-radius-md);
    margin-bottom: 15px;
    transition: var(--transition-timing);
  }

  select.form-control {
    width: 129px;
    font-size: medium;
    border: 2px solid var(--salmon-pink);
    height: 33px;
    border-radius: 8px;
  }

  .showcaseVariation {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    gap: 20px;
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
<!-- below is the style available and sold styles to dynamically change -->
<style>
  <?php
  function convertToPercent($num)
  {
    if ($num <= 0) {
      return '0%';
    } elseif ($num >= 100) {
      return rand(60, 80) . '%';
    } else {
      return $num . '%';
    }
  }
  // echo $percentage . "%"; // Output the percentage
  if (is_string($availableQuantityOfItem)) {
    $availabilityStyle = '100%';
  } else {
    $availabilityStyle = convertToPercent($availableQuantityOfItem);
  }

  ?>.product-featured .showcase-status-bar::before {
    position: absolute;
    content: '';
    top: 3px;
    left: 3px;
    height: 4px;
    width: <?= $availabilityStyle ?>;
    background: var(--salmon-pink);
    border-radius: 4px;
  }

  .allVariants {
    color: var(--salmon-pink);
    font-size: var(--fs-6);
    font-weight: var(--weight-600);
    text-transform: uppercase;
    margin-bottom: 15px;
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
        <p style="display:none" id="productId"><?= $singleProductDetails->id ?></p>
        <p style="display:none" id="productCrioId"><?= $singleProductDetails->crioId ?></p>
        <?php if ($singleProductDetails) : ?>
          <!-- below had class has-scollbar -->
          <div class="showcase-wrapper">

            <div class="showcase-container">

              <div class="showcase">

                <div class="showcase-banner">
                  <div class="swiper mynewSwiper">
                    <div class="swiper-wrapper">
                      <img src="<?= empty($singleProductDetails->image1) ? ROOT . "/uploads/not_available.jpg" : ROOT . $singleProductDetails->image1 ?>" alt="<?= $singleProductDetails->description ?>" class="showcase-img swiper-slide">
                      <img src="<?= empty($singleProductDetails->image2) ? ROOT . "/uploads/not_available.jpg" : ROOT . $singleProductDetails->image2 ?>" alt="<?= $singleProductDetails->description ?>" class="showcase-img swiper-slide">
                      <img src="<?= empty($singleProductDetails->image3) ? ROOT . "/uploads/not_available.jpg" : ROOT . $singleProductDetails->image3 ?>" alt="<?= $singleProductDetails->description ?>" class="showcase-img swiper-slide">
                      <img src="<?= empty($singleProductDetails->image4) ? ROOT . "/uploads/not_available.jpg" : ROOT . $singleProductDetails->image4 ?>" alt="<?= $singleProductDetails->description ?>" class="showcase-img swiper-slide">
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>

                </div>

                <div class="showcase-content">
                  <h2><?= $brandName[0]->name ?? '' ?></h2>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <a href="#">
                    <h3 class="showcase-title"><?= empty($singleProductDetails->name) ? $singleProductDetails->title : $singleProductDetails->name ?> (<?= $singleProductDetails->itemtype ?>) </h3>
                  </a>

                  <p class="showcase-desc">
                  <h3 class="footer-category-title">HSN : <span> <?= $singleProductDetails->hsn ?></span> </h3>
                  <?= $singleProductDetails->description ?>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quibusdam nisi quam, culpa eligendi magni dicta, obcaecati voluptatum a id quod nemo?
                  </p>

                  <div class="price-box">
                    <p class="price">&#x20B9;<?= empty($singleProductDetails->price) ? $singleProductDetails->defaultPrice : $singleProductDetails->price ?></p>

                    <del>&#x20B9;500.00</del>
                  </div>
                  <div id="renderedColors">
                    <div class="colorPallete">
                      Colors: <?php if (isset($availableColors)) {
                                foreach ($availableColors as $color) {
                                  echo '<button class="' . $color['colorName'] . ' color"  colorValue="' . $color['colorId'] . '" style="margin-left:5px ; margin-top:5px ; border-radius: 10px ; background-color: ' . $color['hexCode'] . ';"> </button>';
                                }
                              } else {
                                echo '<a href="#orderTable"><button class="allVariants">Select color Variants</button></a>';
                              } ?>
                    </div>
                  </div>
                  <div id=" renderedSizes">
                    <div class="sizePallete">
                      Sizes: <?php if (isset($availableSizes)) {
                                foreach ($availableSizes as $size) {
                                  echo '<button class="' . $size['sizeName'] . ' size"> ' . $size['sizeName'] . '</button>';
                                }
                              } else {
                                echo '<a href="#orderTable"><button class="allVariants">Select size Variants</button></a>';
                              } ?>
                    </div>
                  </div>
                  <a href="#orderTable"><button class=" add-cart-btn">Select Variants</button></a>
                  <?php
                  if (is_string($availableQuantityOfItem)) {
                    $availableQuantityOfItem = 'Late delivery';
                    echo '
                        <div class="showcase-status">
                    <div class="wrapper">
                      <p>
                        already bought by more than: <b>20</b> retailer
                      </p>

                      <p>
                        Availability: <b>' . $availableQuantityOfItem . '</b>
                      </p>
                    </div>

                    <div class="showcase-status-bar"></div>
                  </div>
                        ';
                  } else {
                    echo '
                    <div class="showcase-status">
                    <div class="wrapper">
                      <p>
                        already bought by more than: <b>20</b> retailer
                      </p>

                      <p>
                        available: <b>' . $availableQuantityOfItem . '</b>
                      </p>
                    </div>

                    <div class="showcase-status-bar"></div>
                  </div>
                    ';
                  }

                  ?>


                  <div class="countdown-box">

                    <p class="countdown-desc">
                      Hurry Up! Offer ends in:
                    </p>

                    <div class="countdown">

                      <div class="countdown-content">

                        <p id="countDownDays" class="display-number">360</p>

                        <p class="display-text">Days</p>

                      </div>

                      <div class="countdown-content">
                        <p id="countDownHour" class="display-number">24</p>
                        <p class="display-text">Hours</p>
                      </div>

                      <div class="countdown-content">
                        <p id="countDownMin" class="display-number">59</p>
                        <p class="display-text">Min</p>
                      </div>

                      <div class="countdown-content">
                        <p id="countDownSec" class="display-number">00</p>
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
        <div class="showcase-container allOrders">
          <div class="showcaseVariation">
            <table id="orderTable" class="table">
              <thead>
                <tr>
                  <th>COLOR</th>
                  <th>SIZE</th>
                  <th>QTY</th>
                  <th>REMOVE</th>
                </tr>
              </thead>
              <tbody>
                <?php
               
                if(isset($_SESSION['CART'])){
                $idsInCart = array_column($_SESSION['CART'], "id");       
                if (in_array($singleProductDetails->id, $idsInCart)) {
                  $productsKey = array_search($singleProductDetails->id, $idsInCart);
                  foreach ($_SESSION['CART'][$productsKey]['variants'] as $itemRow) {
                    // show($itemRow['quantity']);
                    echo '
                      <tr class="itemRow">
                  
                  <td class="colorCell">
                    <select name="" class="colorSelect form-control">
                      <option selected value="'.$itemRow['colorId'].'">'.$itemRow['colorName'].'</option>';
                    if ($availableColors) {
                      foreach ($availableColors as $color) {
                        echo '<option class="' . $color['colorName'] . ' colorSelectOption"  value="' . $color['colorId'] . '" style=" background-color: ' . $color['hexCode'] . ';"> ' . $color['colorName'] . ' </option>';
                      }
                    } 
                    echo '
                    </select>

                  </td>
                  <td class="sizeCell">
                    <select name="" class="sizeSelect form-control">
                      <option selected value="'.$itemRow['sizeId'].'">'.$itemRow['sizeName'].'</option>';

                    if ($availableSizes) {
                      foreach ($availableSizes as $size) {
                        echo '<option class="' . $size['sizeName'] . ' sizeSelectOption"  value="' . $size['sizeId'] . '" style=" "> ' . $size['sizeName'] . ' </option>';
                      }
                    } 

                    echo '
                    </select>

                  </td>
                  <td class="qtyCell">
                    <div class="button-container">
                      <button class="cart-qty-plus" id="1" qtyVal="1" type="button" value="+">+</button>
                      <input type="text" name="qty" min="0" id="qty_1" class="qty form-control" value="'.$itemRow['quantity'].'" />
                      <button class="cart-qty-minus" id="1" qtyVal="1" type="button" value="-">-</button>
                    </div>
                  </td>
                  <td style="cursor: pointer; color:red" class="removeItem">
                    <a href="javascript:void(0)">X</a>
                  </td>
                </tr>
                      ';
                  }
                }

              }
                ?>

                <tr class="itemRow">

                  <td class="colorCell">
                    <select name="" class="colorSelect form-control">
                      <option selected value="">select color</option>
                      <?php if ($availableColors) {
                        foreach ($availableColors as $color) {
                          echo '<option class="' . $color['colorName'] . ' colorSelectOption"  value="' . $color['colorId'] . '" style=" background-color: ' . $color['hexCode'] . ';"> ' . $color['colorName'] . ' </option>';
                        }
                      } else {
                        foreach ($availableColorsDb as $color) {
                          echo '<option class="' . $color->name . ' colorSelectOption"  value="' . $color->crioId . '" style=" background-color: ' . $color->hex . ';"> ' . $color->name . ' </option>';
                        }
                      }
                      ?>
                    </select>

                  </td>
                  <td class="sizeCell">
                    <select name="" class="sizeSelect form-control">
                      <option selected value="">select size</option>
                      <?php
                      if ($availableSizes) {
                        foreach ($availableSizes as $size) {
                          echo '<option class="' . $size['sizeName'] . ' sizeSelectOption"  value="' . $size['sizeId'] . '" style=" "> ' . $size['sizeName'] . ' </option>';
                        }
                      } else {
                        foreach ($availableSizesDb as $size) {
                          echo '<option class="' . $size->size . ' sizeSelectOption"  value="' . $size->crioId . '" style=" "> ' . $size->size . ' </option>';
                        }
                      }
                      ?>

                    </select>

                  </td>
                  <td class="qtyCell">
                    <div class="button-container">
                      <button class="cart-qty-plus" id="1" qtyVal='1' type="button" value="+">+</button>
                      <input type="text" name="qty" min="0" id="qty_1" class="qty form-control" value="" />
                      <button class="cart-qty-minus" id="1" qtyVal='1' type="button" value="-">-</button>
                    </div>
                  </td>
                  <td style="cursor: pointer; color:red" class="removeItem">
                    <a href="javascript:void(0)">X</a>
                  </td>
                </tr>
              </tbody>
              <tfoot>
                <!-- <tr>
                  <td colspan="4"></td>
                  <td><strong>TOTAL = $ <span id="total" class="total">0</span></strong></td>
                </tr> -->
              </tfoot>
            </table>
            <Button id="sendToCart" class="add-cart-btn">Add to cart</Button>
            <Button class="add-cart-btn">Order now</Button>
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
<!-- <script src="<?php echo ASSETS . THEME  ?>js/script.js"></script> -->
<script>
  var swiper = new Swiper(".mynewSwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script>
  function getQtyFromColorSize() {
    var selectedColorValue = $(this).closest('.itemRow').find('.colorSelect').val();
    var selectedSizeValue = $(this).closest('.itemRow').find('.sizeSelect').val();

    if (selectedColorValue != '' && selectedSizeValue != '') {
      $.ajax({
        method: 'POST',
        url: '<?= ROOT ?>ajax_productDetails',
        data: {
          data_type: 'getQtyFromColorSize',
          color: selectedColorValue,
          size: selectedSizeValue
        },
        success: function(response) {
          addRow()
          console.log(response);
        }
      });
    }
  }



  function addRow() {
    var newRow = $('.itemRow:last').clone();
    console.log(newRow);

    var newQtyId = 'qty_' + Date.now(); // generate a unique ID
    newRow.find('.qty').attr('id', newQtyId);
    newRow.find('.cart-qty-plus').attr('id', newQtyId);
    newRow.find('.cart-qty-minus').attr('id', newQtyId);

    newRow.find('.colorSelect, .sizeSelect').val('');
    newRow.find('.qty').val(0);
    $('#orderTable tbody').append(newRow);
    addEventListeners();
  }

  function removeRow() {
    // cloning the last row and keeping the reference
    var newRow = $('.itemRow:last').clone();
    newRow.find('.colorSelect, .sizeSelect').val('');
    newRow.find('.qty').val(0);

    // before removing i have to check wether this is the last row or not and keep a copy everytime an item is removed
    // if it is the last item then append the above cloned row else equating the clone to null to destroy 
    $(this).closest('.itemRow').remove();
    if ($('#orderTable tbody tr').length == 0) {
      $('#orderTable tbody').append(newRow);
      addEventListeners();
    } else {
      addEventListeners();
    }
    var itemsMap = {};
    itemsMap = getItems('.itemRow')
    // convert items map to array
    var items = Object.values(itemsMap);

    console.log(items);
    itemId = $('#productId').text()
    itemCrioId = $('#productCrioId').text()
    console.log(itemId, itemCrioId);
    $.ajax({
      method: 'POST',
      url: '<?= ROOT ?>ajax_addToCart',
      data: {
        data_type: 'addToCart',
        variants: items,
        itemId: itemId,
        itemCrioId: itemCrioId,
      },
      success: function(response) {
        // addRow()
        console.log(response);
      }
    });
  }

  function addEventListeners() {
    // removing all listeners from rows
    //IMP removing eventlistners and adding them again so one reference doesnt get copied to all the rows
    $('#orderTable tbody tr').off('change', '.colorSelect, .sizeSelect');
    $('#orderTable tbody tr').off('click', '.removeItem');
    $('.removeItem').off('click', removeRow);
    $('.cart-qty-plus').off('click', incrementQty);
    $('.cart-qty-minus').off('click', decrementQty);
    // Add event listener to last row
    $('#orderTable tbody tr:last').on('change', '.colorSelect, .sizeSelect', getQtyFromColorSize);
    $('.removeItem').on('click', removeRow);
    $('.cart-qty-plus').on('click', incrementQty);
    $('.cart-qty-minus').on('click', decrementQty);

  }

  $(document).ready(function() {
    addEventListeners(); //adding all the eventlistners when the page loads
  });


  function getItems(selector) {
    var itemsMap = {};

    $(selector).each(function() {
      var color = $(this).find('.colorCell select').val();
      var colorName = $(this).find('.colorCell select').find('option:selected').text()
      var size = $(this).find('.sizeCell select').val();
      var sizeName = $(this).find('.sizeCell select').find('option:selected').text()
      var qty = $(this).find('.qtyCell input').val()

      if (qty != 0) {
        // create item key based on colorId and sizeId
        var key = color + '-' + size; //so that duplicate color and size can be handled

        if (itemsMap[key]) {
          // update quantity of existing item
          itemsMap[key].quantity += parseInt(qty);
        } else {
          // add new item to items map
          itemsMap[key] = {
            colorId: color,
            colorName: colorName,
            sizeName: sizeName,
            sizeId: size,
            quantity: parseInt(qty)
          };
        }
      }
    });

    return itemsMap;
  }



  $('#sendToCart').click(function() {
    var items = [];
    var itemsMap = {};
    itemsMap = getItems('.itemRow')
    // convert items map to array
    var items = Object.values(itemsMap);

    console.log(items);
    itemId = $('#productId').text()
    itemCrioId = $('#productCrioId').text()
    console.log(itemId, itemCrioId);
    $.ajax({
      method: 'POST',
      url: '<?= ROOT ?>ajax_addToCart',
      data: {
        data_type: 'addToCart',
        variants: items,
        itemId: itemId,
        itemCrioId: itemCrioId,
      },
      success: function(response) {
        // addRow()
        console.log(response);
      }
    });
    // send items to server using AJAX
  });

  function incrementQty() {
    var $n = $(this)
      .parent(".button-container")
      .find(".qty");
    $n.val(Number($n.val()) + 1); //incrementing the qty
    // ajax can be used here
  }

  function decrementQty() {
    var $n = $(this)
      .parent(".button-container")
      .find(".qty");
    var QtyVal = Number($n.val());
    if (QtyVal > 0) {
      $n.val(QtyVal - 1);
    }
  }



  // below i am writing code for the countdowwn
  function startCountdown() {
    // below i am Setting the target date to 360 days from now
    var targetDate = new Date();
    targetDate.setDate(targetDate.getDate() + 360);

    // Updating the countdown timer every second
    var countdownInterval = setInterval(function() {
      // Get the current date and time
      var now = new Date();

      // Calculating the remaining time in milliseconds
      var remainingTime = targetDate - now;

      // Calculate the remaining days, hours, minutes, and seconds
      var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
      var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

      // Update the countdown timer display
      document.getElementById("countDownDays").innerHTML = days;
      document.getElementById("countDownHour").innerHTML = hours;
      document.getElementById("countDownMin").innerHTML = minutes;
      document.getElementById("countDownSec").innerHTML = seconds;

      // Stop the countdown timer when the target date is reached
      if (remainingTime < 0) {
        clearInterval(countdownInterval);
        document.getElementById("countDownDays").innerHTML = "0";
        document.getElementById("countDownHour").innerHTML = "0";
        document.getElementById("countDownMin").innerHTML = "0";
        document.getElementById("countDownSec").innerHTML = "0";
      }
    }, 1000);
  }

  // Start the countdown timer
  startCountdown();
</script>
<?php $this->view("footer", $data); ?>

<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>