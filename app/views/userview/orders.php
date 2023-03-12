<?php $this->view("header", $data); ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="main margin2">
    <div class="container">
        <div class="product-box mt-3">
            <h2>RECREATIOON ORDERS </h2>

            <div class="product-minimal mt-5">

                <div class="product-showcase mt-3">

                    <h2 class="title mt-5">DETAILS OF ORDERS PLACED FROM RECREATION</h2>

                    <div class="showcase-wrapper  has-scrollbar">

                        <div class="showcase-container">

                            <?php if (is_array($orders)) : ?>
                                <?php foreach ($orders as $order) : ?>
                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                           
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">ORDER-UUID: <span class="price"> <?= $order->cartUuId ?></span> </h4>
                                                <h4 class="showcase-title">ORDER-DATE: <span class="price"><?= date('jS F, Y', strtotime($order->dateTime));  ?></span> </h4>
                                            </a>

                                            <a href="#" class="showcase-category">AMOUNT: &#x20B9; <span class="price"> <?= $order->totalAmount ?></span></a>

                                            <div class="price-box">

                                                <table>
                                                    <tr>
                                                        <th>Color Name</th>
                                                        <th>Size Name </th>                                                        
                                                        <th>Quantity</th>                                                       
                                                        <th>Price</th>
                                                    </tr>
                                                    <?php foreach ($order->cartItems as $items) : ?>
                                                    <tr>
                                                        <td> <?= $items->colorName  ?></td>
                                                        <td> <?= $items->sizeName  ?></td>
                                                        <td> # <?= $items->quantity  ?></td>
                                                        <td> <span class="price"> &#x20B9; <?= $items->price ?></span></td>
                                                        
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </table>
                                            </div>

                                        </div>
                                        <div class="more-content">
                                            <div class="showcase-content">
                                                <a href="#">
                                                    <h4 class="showcase-title"></h4>
                                                </a>
                                                <p class="showcase-category">STATUS-<span class="price">WAITING TO BE APPROVED</span></p>
                                            </div>
                                        </div>

                                    </div>

                                <?php endforeach; ?>
                            <?php endif; ?>


                        </div>


                    </div>

                </div>




            </div>
        </div>
    </div>
</div>

<?php $this->view("footer", $data); ?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>