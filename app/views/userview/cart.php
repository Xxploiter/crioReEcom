<?php $this->view("header", $data); ?>
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
                                        <tr>
                                            <td>

                                                <div class="product-img">
                                                    <div class="img-prdct"><img src="<?php echo ROOT ?><?= $cartSingleProdDetails->image1 ?>"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <p><?= $cartSingleProdDetails->name ?></p>

                                            </td>
                                            <td>
                                                <input type="hidden" class="productId" style="display: none;" name="productIdValue" value="<?= $cartSingleProdDetails->id ?>" />
                                                <div class="button-container">
                                                    <button class="cart-qty-plus" type="button" value="+">+</button>
                                                    <input id="qtyValIs" type="text" name="qty" min="0" class="qty form-control" value="<?= $cartSingleProdDetails->cartQty ?>" />
                                                    <button class="cart-qty-minus" type="button" value="-">-</button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" value="<?= $cartSingleProdDetails->price ?>" class="price form-control" disabled>
                                            </td>
                                            <td>$ <span id="amount" class="amount">0</span></td>
                                            <td style="cursor: pointer; color:red" class="removeItem" onclick="removeProdCart(<?= $cartSingleProdDetails->id ?>)">
                                                <a href="addToCart/removeItemCart/<?= $cartSingleProdDetails->id ?>">X</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>

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

</main>






<?php $this->view("footer", $data); ?>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->


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
<script>
    function collectValidateData(e) {
        e.preventDefault();
        // let CataModal = document.getElementById('addCataModal')
        // var addCataModal = bootstrap.Modal.getOrCreateInstance(CataModal)
        const cataData = document.querySelector('#categoryName')
        const categoryParent = document.querySelector('#categoryParent').value
        if (cataData.value.trim() == "" || !isNaN(cataData.value.trim())) {
            alert("Enter a valid Category")
        }
        const data = cataData.value.trim()
        sendData({
            category: data,
            parentCategory: categoryParent,
            data_type: 'add_category'
        })
    }
    // sendData function to handle the sending of the data using ajax
    function sendData(data = {}, action) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handleResult(ajax.responseText)
            }
        })
        console.log("Sending to " + "ajax_cart/" + action + "/" + JSON.stringify(data));
        ajax.open("POST", "<?= ROOT ?>ajax_cart/" + action + "/" + JSON.stringify(data), true)
        ajax.send(JSON.stringify(data))
    }
    // handleResult for handling all the result from the sendData function
    function handleResult(result) {
        console.log(result);
        if (result != '') {
            const obj = JSON.parse(result)
            if (obj.data_type != 'undefined') {
                if (obj.data_type == 'add_new') {
                    // we check above the type of data recieved if success then we get a message type of info
                    if (obj.message_type == 'info') {
                        // alert(obj.message)
                        $('#addCataModal').modal('hide')
                        const tb = document.querySelector('#categoryTableBody')
                        tb.innerHTML = obj.data;
                    } else {
                        alert(obj.message)
                    }
                } else if (obj.data_type == 'delete_row') {
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                } else if (obj.data_type == 'toggled_row') {
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                } else if (obj.data_type == 'edit_row') {
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                    $('#editCategoryModal').modal('hide')
                }
            }
        }
    }

    // -----------------for-Shopping-cart-------------
    $(document).ready(function() {
        update_amounts();
        $('.qty, .price').on('keyup keypress blur change', function(e) {
            update_amounts();
        });
    });
    // updates the DOM/all the tr and tds 
    function update_amounts() {
        var sum = 0.0;
        $('#myTable > tbody  > tr').each(function() {
            var qty = $(this).find('.qty').val();
            var price = $(this).find('.price').val();
            var amount = (qty * price)
            sum += amount;
            $(this).find('.amount').text('' + amount);
        });
        $('.total').text(sum);

    }



    //----------------for quantity-increment-or-decrement-------
    // for ppressing enter 
    $('.qty, .price').on('input', function(e) {
        console.log("observe this");
        //IMP keypress ajax goes here
        const qtyIs = document.querySelector('#qtyValIs').value
        const productIdIs = $(this).closest('td').find("input[name=productIdValue]").val()
        console.log(productIdIs);
        sendData({
            quantity: qtyIs,
            productId: productIdIs
        }, 'edit_quantity')
        // keypress ajax ends here
        update_amounts();
    });
    var incrementQty;
    var decrementQty;
    var plusBtn = $(".cart-qty-plus");
    var minusBtn = $(".cart-qty-minus");
    var incrementQty = plusBtn.click(function() {
        var $n = $(this)
            .parent(".button-container")
            .find(".qty");
        $n.val(Number($n.val()) + 1); //incrementing the qty
        // ajax can be used here
        const qtyIs = document.querySelector('#qtyValIs').value
        const productIdIs = $(this).closest('td').find("input[name=productIdValue]").val()
        console.log(productIdIs);
        sendData({
            quantity: qtyIs,
            productId: productIdIs
        }, 'edit_quantity')
        // ajax ends here
        update_amounts(); //updating the total value
    });

    var decrementQty = minusBtn.click(function() {
        var $n = $(this)
            .parent(".button-container")
            .find(".qty");
        var QtyVal = Number($n.val());
        if (QtyVal > 0) {
            $n.val(QtyVal - 1);
        }
        // ajax goes here
        const qtyIs = document.querySelector('#qtyValIs').value
        const productIdIs = $(this).closest('td').find("input[name=productIdValue]").val()
        console.log(productIdIs);
        sendData({
            quantity: qtyIs,
            productId: productIdIs
        }, 'edit_quantity')
        // ends hhere ajax

        update_amounts();
    });
</script>
<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>