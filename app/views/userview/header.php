<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['pageTitle']; ?></title>

    <!--
    - favicon
  -->
    <!-- Ask for appropiate favicon from Rishi -->
    <!-- <link rel="shortcut icon" href="<?php echo ASSETS . THEME  ?>/images/logo/favicon.ico" type="image/x-icon"> -->

    <!--
    - custom css link
  -->
    <!-- <link rel="stylesheet" href="<?php echo ASSETS . THEME  ?>/css/style-prefix.css"> -->
    <link rel="stylesheet" href="<?php echo ASSETS . THEME  ?>/css/style.css">
    

    <!--
    - google font link
  -->
  <!-- roadmap js css below -->
  <!-- <link href="
https://cdn.jsdelivr.net/npm/jquery-roadmap@1.4.0/dist/jquery.roadmap.min.css
" rel="stylesheet"></link> -->
<!-- roadmapjs ends here -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

</head>

<body>



    <!--
    - HEADER
  -->

    <header>

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - $55
                    </p>
                </div>

                <div class="header-top-actions">

                    <select name="currency">

                        <option value="usd">USD &dollar;</option>
                        <option value="eur">EUR &euro;</option>

                    </select>

                    <select name="language">

                        <option value="en-US">English</option>
                        <option value="es-ES">Espa&ntilde;ol</option>
                        <option value="fr">Fran&ccedil;ais</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                    <!-- ask for appropiaate icon from Rishi -->
                    <!-- <img src="<?php echo ASSETS . THEME  ?>/images/logo/logo.svg" alt="Anon's logo" width="120" height="36"> -->
                </a>

                <div class="header-search-container">

                    <input id="search-input" type="search" name="search" class="search-field" placeholder="Enter your product name...">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                </div>

                <div class="header-user-actions">
                    <!-- please make sure not to use the php estension in anchor tags -->
                    <?php if (isset($data['retailerAuthData'])) : ?>
                        <button class="action-btn">
                            <a href="<?php echo ROOT; ?>profile">
                                <ion-icon name="person-outline"></ion-icon>
                            </a>
                            <p style="font-size: 8px;" class="userNameIs"><?= $data['retailerAuthData']->name ?></p>
                        </button>
                        <button class="action-btn">
                            <a href="<?php echo ROOT; ?>logout">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </a>
                            <p style="font-size: 8px;" class="userNameIs">LOGOUT</p>
                        </button>
                    <?php elseif (!isset($data['retailerAuthData'])) : ?>
                        <button class="action-btn">
                            <a href="<?php echo ROOT; ?>signup">
                                <ion-icon name="person-outline"></ion-icon>
                            </a>
                            <p style="font-size: 8px;" class="userNameIs">SIGNUP</p>
                        </button>
                        <button class="action-btn">
                            <a href="<?php echo ROOT; ?>login">
                                <ion-icon name="log-in-outline"></ion-icon>
                            </a>
                            <p style="font-size: 8px;" class="userNameIs">LOGIN</p>
                        </button>
                    <?php endif; ?>
                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                    <a href="<?php echo ROOT; ?>cart">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        </a>
                        <p style="font-size: 8px;" class="userNameIs">CART</p>
                        <span class="count">0</span>
                    </button>

                </div>

            </div>

        </div>

        
        <?php if (isset($data['pageTitle']) && $data['pageTitle']!='Profile') : ?>
            <!-- Dont wanna show certain elements of the header if its the Profile page -->
            
        <div class="overlay" data-overlay></div>

        <!--
        - MODAL
        -->

        <!-- <div class="modal" data-modal>

        <div class="modal-close-overlay" data-modal-overlay></div>

        <div class="modal-content">

            <button class="modal-close-btn" data-modal-close>
                <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="newsletter-img">
                <img src="<?php echo ASSETS . THEME  ?>/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
            </div>

            <div class="newsletter">

                <form action="#">

                    <div class="newsletter-header">

                        <h3 class="newsletter-title">Subscribe Newsletter.</h3>

                        <p class="newsletter-desc">
                            Subscribe the <b>CrioEcom</b> to get latest products and discount update.
                        </p>

                    </div>

                    <input type="email" name="email" class="email-field" placeholder="Email Address" required>

                    <button type="submit" class="btn-newsletter">Subscribe</button>

                </form>

            </div>

        </div>

        </div> -->

        <!--
        - NOTIFICATION TOAST
        -->

        <div class="notification-toast" data-toast>

        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img src="<?php echo ASSETS . THEME  ?>/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
        </div>

        <div class="toast-detail">

            <p class="toast-message">
                Someone in new just bought
            </p>

            <p class="toast-title">
                Rose Gold Earrings
            </p>

            <p class="toast-meta">
                <time datetime="PT2M">2 Minutes</time> ago
            </p>

        </div>

        </div>


        <nav class="desktop-navigation-menu">
            <div class="container">
                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Desktop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Laptop</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Camera</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tablet</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo ASSETS . THEME  ?>/images/electronics-banner-1.jpg" alt="headphone collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Men's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sports</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Jacket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sunglasses</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo ASSETS . THEME  ?>/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Women's</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Formal</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Casual</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Perfume</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cosmetics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bags</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo ASSETS . THEME  ?>/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Electronics</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Smart TV</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Keyboard</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Mouse</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Microphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo ASSETS . THEME  ?>/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Men's</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="/shirt">Shirt</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Shorts & Jeans</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Safety Shoes</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Wallet</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Women's</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Dress & Frock</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Earrings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Necklace</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Makeup Kit</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Jewelry</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Earrings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Couple Rings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Necklace</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Bracelets</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Perfume</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Clothes Perfume</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Deodorant</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Flower Fragrance</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Air Freshener</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Blog</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Hot Offers</a>
                    </li>

                </ul>
            </div>
        </nav>

        <?php endif; ?>

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Men's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shirt</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shorts & Jeans</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Safety Shoes</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Wallet</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Women's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Dress & Frock</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Makeup Kit</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Jewelry</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Couple Rings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Bracelets</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Perfume</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Clothes Perfume</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Deodorant</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Flower Fragrance</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Air Freshener</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Fren&ccedil;h</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">EUR &euro;</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">

                    <li>
                        <a href="/dragon" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script>
let timeoutId;

const input = document.getElementById('search-input');
input.addEventListener('input', () => debouncedSendData(input.value));


function debouncedSendData(data) {
    if (timeoutId) {
        clearTimeout(timeoutId);
    }
    timeoutId = setTimeout(() => {
        // sendData(data);
        console.log("debounce working " + data);
    }, 2000);
}
// sendData function to handle the sending of the data using ajax
function sendData(data = {}) {
        const ajax = new XMLHttpRequest()
        ajax.addEventListener('readystatechange', function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
                handleResult(ajax.responseText)
      // handle the search results
      //TODO Create a ajax_universalSearch controller 
      //TODO create a result modal
      //TODO make sure to show all results ex:- ledger, retailer name, products, gst etc
            }
        })
        ajax.open("POST", "<?= ROOT ?>ajax_universalSearch", true) 
        ajax.send(JSON.stringify(data))
    }
    // TODO revamp the below request handler
    function handleResult(result) {
        // console.log(result);
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
                } else if(obj.data_type == 'delete_row') {
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                } else if(obj.data_type == 'toggled_row'){
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                } else if(obj.data_type == 'edit_row'){
                    const tb = document.querySelector('#categoryTableBody')
                    tb.innerHTML = obj.data;
                    $('#editCategoryModal').modal('hide')
                } 
            }
        }
    }


    </script>