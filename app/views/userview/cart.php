<?php $this->view("header", $data); ?>
<?php
// show($_SESSION);
// die;
?>
<!-- before showing the header i have to be careful as include wont work as i am still in the home class so i can utilize the view function to show  -->
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
    .product-name {
        cursor: pointer;
        text-decoration: underline;
    }
</style>
<style>
    .notification-success {
        position: fixed;
        bottom: 80px;
        left: 20px;
        right: 20px;
        background: var(--white);
        max-width: 300px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 15px;
        border-radius: var(--border-radius-md);
        box-shadow: 0 5px 20px hsl(0deg 0% 0% / 15%);
        transform: translateX(calc(-100% - 40px));
    }

    .success {

        transition: 0.5s ease-in-out;
        z-index: 5;
        animation: slideInOutSuccess 3s ease-in-out;
    }

    @keyframes slideInOutSuccess {
        0% {
            transform: translateX(calc(-50% - 40px));
            opacity: 0;
            visibility: hidden;
        }

        20% {
            transform: translateX(calc(-100% - 40px));
            opacity: 0;
            visibility: visible;
        }

        50% {
            transform: translateX(0);
            opacity: 1;
            visibility: visible;
        }

        100% {
            transform: translateX(calc(-100% - 40px));
            opacity: 0;
            visibility: hidden;
        }
    }
</style>
<!-- below is the css for loader and modal orderplace -->
<style>
    .modal-orderplaced {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        z-index: 999;
    }

    .modal-orderplaced-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .modal h2 {
        margin-top: 0;
    }

    .modal p {
        margin: 10px 0;
    }

    .btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #3e8e41;
    }

    .loader {
        width: 100%;
        height: 3px;
        position: relative;
        overflow: hidden;
        background-color: #f2f2f2;
    }

    .loader::before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #4CAF50;
        animation: loading 8s linear;
    }

    @keyframes loading {
        0% {
            left: -100%;
        }

        100% {
            left: 100%;
        }
    }
</style>
<main>
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
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th class="text-right"><span id="amount" class="amount">Amount</span> </th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($cartAllProductDetails) : ?>
                                    <?php foreach ($cartAllProductDetails as $cartSingleProdDetails) : ?>
                                        <tr class="product-row" id="<?= $cartSingleProdDetails->id ?>">
                                            <td>

                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="<?php echo ROOT ?><?= $cartSingleProdDetails->image1 ?>"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="<?= ROOT ?>productDetails/<?= $cartSingleProdDetails->id ?>">
                                                    <p class="product-name"><?= $cartSingleProdDetails->title ?></p>
                                                </a>

                                            </td>
                                            <td>
                                                <input type="hidden" class="productId" style="display: none;" name="productIdValue" value="<?= $cartSingleProdDetails->id ?>" />
                                                <div class="button-container">
                                                    <!-- <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input id="qtyValIs" type="text" name="qty" min="0" class="qty form-control" value= />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button> -->
                                                    VARIANTS BELOW
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="<?= 'Avg-Price:&#x20B9;' . $cartSingleProdDetails->defaultPrice ?>" class="price form-control" disabled>
                                            </td>
                                            <?php
                                            $sum = 0;
                                            $idsInCart = array_column($_SESSION['CART'], "id");
                                            if (in_array($cartSingleProdDetails->id, $idsInCart)) {
                                                $productsKey = array_search($cartSingleProdDetails->id, $idsInCart);
                                                foreach ($_SESSION['CART'][$productsKey]['variants'] as $itemRow) {
                                                    $sum += intval($itemRow['price']) * intval($itemRow['quantity']);
                                                }
                                            }
                                            ?>
                                            <td>&#x20B9; <span class="amount"><?= $sum ?></span></td>
                                            <td style="cursor: pointer; color:red" class="removeItem" onclick="removeProdCart(<?= $cartSingleProdDetails->id ?>)">
                                                <a href="javascript:void(0)">Remove-Item(X)</a>
                                            </td>
                                        </tr>
                                        <!--start  -->
                                        <?php
                                        $idsInCart = array_column($_SESSION['CART'], "id");
                                        if (in_array($cartSingleProdDetails->id, $idsInCart)) {
                                            $productsKey = array_search($cartSingleProdDetails->id, $idsInCart);
                                            foreach ($_SESSION['CART'][$productsKey]['variants'] as $itemRow) {

                                                echo '
                      <tr class="itemRow" productIs = "' . $cartSingleProdDetails->id . '"> 
                  <td class="colorCell">
                    <select name="" class="colorSelect form-control">
                      <option selected value="' . $itemRow['colorId'] . '">' . $itemRow['colorName'] . '</option>';

                                                echo '
                    </select>

                  </td>
                  <td class="sizeCell">
                    <select name="" class="sizeSelect form-control">
                      <option selected value="' . $itemRow['sizeId'] . '">' . $itemRow['sizeName'] . '</option>';



                                                echo '
                    </select>

                  </td>
                  <td class="qtyCell">
                    <div class="button-container">
                    <input type="text" value=" ' . $itemRow['quantity'] . '" class="price form-control" disabled="">
                     
                    </div>
                  </td>
                  <td style="cursor: pointer; color:red" class="price">&#x20B9;
                  ' . $itemRow['price'] . '
                  </td>
                  <td style="cursor: pointer; color:red" class="amountIs">&#x20B9;
                    ' . $itemRow['price'] * $itemRow['quantity'] . '
                  </td>
                  <td style="cursor: pointer; color:red" class="removeItem">
                    <a href="javascript:void(0)">X</a>
                  </td>
                </tr>
                      ';
                                            }
                                        }


                                        ?>
                                        <!--end  -->

                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <div>CART IS EMPTY</div>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4"></td>
                                    <td><strong>TOTAL = &#x20B9; <span id="total" class="total">0</span></strong></td>
                                    <td> <Button onclick="placeOrder()" class="add-cart-btn">Order now</Button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="notification-success" data-toast="">

        <div class="toast-detail">

            <p class="toast-message">
            <p style="color:green">Successfull</p>
            </p>

            <p class="toast-meta">
                <time datetime="PT2M"></time>
            </p>

        </div>

    </div>
    <div class="modal-orderplaced">
        <div class="modal-orderplaced-content">
            <h2>Order Placed Successfully</h2>
            <p>Your order has been placed successfully. You will receive a confirmation email shortly.</p>
            <button class="btn" id="btn-redirect">You will now be redirected to your Profile</button>
            <div class="loader"></div>
        </div>
    </div>

</main>






<?php $this->view("footer", $data); ?>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->


<!--
    - custom js link
  -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- <script src="<?php echo ASSETS . THEME  ?>js/script.js"></script> -->
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
<script>
    var sum = 0;
    $('.removeItem').on('click', removeRow);
    $('.amount').each(function(index, ele) {
        if (Number(ele.innerHTML)) {
            sum += Number(ele.innerHTML)
        }
    });
    $('#total').text(sum);


    function removeProdCart(id) {
        const singleTotal = $(`#${id}`).find('.amount').text();
        console.log(singleTotal);
        const total = $('#total').text()
        $('#total').text(total - Number(singleTotal));
        $(`tr[productis="${id}"]`).remove();
        $(`#${id}`).remove();

        $.ajax({
            method: 'POST',
            url: '<?= ROOT ?>ajax_addToCart',
            data: {
                data_type: 'removeProduct',
                itemId: id,
            },
            success: function(response) {
                // addRow()
                console.log(response);
                $(".notification-success").addClass("success").on("animationend", function() {
                    $(this).removeClass("success");
                });
            }
        });
    }


    function removeRow() {
        var valueis = $(this).closest('.itemRow').find('.amountIs').text();
        const idOfProduct = $(this).closest('.itemRow').attr('productIs');
        const itemId = idOfProduct;
        // now getting the value of the single total using the above id
        const singleTotal = $(`#${idOfProduct}`).find('.amount').text();
        let priceNumber = parseFloat(valueis.replace(/₹|\s/g, ""));
        $(`#${idOfProduct}`).find('.amount').text(singleTotal - priceNumber);

        var colorId = $(this).closest('.itemRow').find('.colorCell select').val();
        var sizeId = $(this).closest('.itemRow').find('.sizeCell select').val();
        console.log(colorId, sizeId);
        // $(this).closest('.product-row').find('.amount').text(singleTotal-priceNumber);
        total = $('#total').text();
        $('#total').text(total - Number(priceNumber));
        $(this).closest('.itemRow').remove();
        console.log(total);



        $.ajax({
            method: 'POST',
            url: '<?= ROOT ?>ajax_addToCart',
            data: {
                data_type: 'removeVariants',
                sizeId: sizeId,
                colorId: colorId,
                itemId: itemId,
            },
            success: function(response) {

                $(".notification-success").addClass("success").on("animationend", function() {
                    $(this).removeClass("success");
                });
            }
        });
    }

    function placeOrder() {
        $.ajax({
            method: 'POST',
            url: '<?= ROOT ?>ajax_addToCart',
            data: {
                data_type: 'approveRequest',
            },
            success: function(response) {
                if (response) {
                    console.log(response);
                    $('.modal-orderplaced').show()
                    setTimeout(function() {
                        window.location.href = "<?= ROOT ?>profile";
                    }, 8000);
                }
                console.log(response);

            }
        });
    }
</script>
<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>