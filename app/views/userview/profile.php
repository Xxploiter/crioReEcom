<?php $this->view("header", $data); ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ASSETS . THEME  ?>css/jquery.roadmap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?php echo ASSETS . THEME  ?>css/userProfile.css"   rel="stylesheet" type="text/css"/>

<div class="main margin2">
  <div class="container">
    <!-- <h2>DASHBOARD</h2>
    <div class="testimonials-box mt-5">
      <div class="row">
      </div>

    </div> -->
    <div class="product-showcase">
      <h2 class="title mt-5">DASHBOARD</h2>
      <div class="sectionInfo">
        <div class="itemUserInfo">
          <div class="icon" style="background-color: #5b72ee">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 class="title">SALES</h3>
          <p class="text">  <span class="reportsUser"> &#x20B9; </span>100045</p>
        </div>

        <div class="itemUserInfo">
          <div class="icon" style="background-color: #29b9e7">
            <i class="fas fa-area-chart"></i>
          </div>
          <h3 class="title">DUE</h3>
          <p class="text">  <span class="reportsUser"> &#x20B9; </span>4500</p>
        </div>

        <div class="itemUserInfo">
          <div class="icon" style="background-color: #f48c06">
            <i class="fas fa-bar-chart"></i>
          </div>
          <h3 class="title">LEDGER</h3>
          <p class="text">  <span class="reportsUser">&#x20B9; </span>34000</p>
          <a href="<?= ROOT ?>profile/ledger">View Ledger</a>
        </div>

      </div>
    </div>

    <div class="testimonials-box">
      <!--
                - Profile card
          -->
      <div class="testimonial">

        <div class="testimonial-card">

          <img src="<?php echo ASSETS . THEME ?>/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

          <p class="testimonial-name"><?php echo $data['retailerAuthData']->name ?></p>

          <p class="testimonial-title">RANK &amp; STATUS</p>

          <!-- <p class="testimonial-desc">
                    Lorem ipsum dolor sit amet consectetur Lorem ipsum
                    dolor dolor sit amet.
                  </p> -->
          <div class="radarChart">
            <canvas id="radar"></canvas>
          </div>


        </div>

      </div>
      <!-- -CTA-->

      <div class="cta-container">

        <img src="<?php echo ASSETS . THEME ?>/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

        <a href="#" class="cta-content">

          <p class="discount">25% Discount</p>

          <h2 class="cta-title">CUSTOM ADVERTISEMENT</h2>

          <p class="cta-text">Starting @ $10</p>

          <button class="cta-btn">Shop now</button>

        </a>

      </div>



      <!--- SERVICE-->

      <div class="service">

        <h2 class="title">MONTHLY TOP DISTRIBUTORS RANKS</h2>

        <div class="service-container">

          <a href="#" class="service-item">

            <div class="service-icon">
              <ion-icon name="boat-outline" role="img" class="md hydrated" aria-label="boat outline"></ion-icon>
            </div>

            <div class="service-content">

              <h3 class="service-title">TROOS FASHHIO</h3>
              <p class="service-desc">BOUGHT Order Over $10000</p>

            </div>

          </a>

          <a href="#" class="service-item">

            <div class="service-icon">
              <ion-icon name="rocket-outline" role="img" class="md hydrated" aria-label="rocket outline"></ion-icon>
            </div>

            <div class="service-content">

              <h3 class="service-title">LEE </h3>
              <p class="service-desc">BOUGHT Order Over $1000</p>

            </div>

          </a>

          <a href="#" class="service-item">

            <div class="service-icon">
              <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon>
            </div>

            <div class="service-content">

              <h3 class="service-title">WRANGLER JEANS</h3>
              <p class="service-desc">BOUGHT Order Over $600</p>

            </div>

          </a>

          <a href="#" class="service-item">

            <div class="service-icon">
              <ion-icon name="arrow-undo-outline" role="img" class="md hydrated" aria-label="arrow undo outline">
              </ion-icon>
            </div>

            <div class="service-content">

              <h3 class="service-title">SURYA FASHION</h3>
              <p class="service-desc">BOUGHT Order Over $700</p>

            </div>

          </a>

          <a href="#" class="service-item">

            <div class="service-icon">
              <ion-icon name="ticket-outline" role="img" class="md hydrated" aria-label="ticket outline"></ion-icon>
            </div>

            <div class="service-content">

              <h3 class="service-title">DRAGONS ADDA</h3>
              <p class="service-desc">BOUGHT Order Over $800</p>

            </div>

          </a>

        </div>

      </div>
    </div>

    <div class="product-box mt-3">
      <h2>MOST SELLING PRODUCTS </h2>

      <div class="product-minimal mt-5">

        <div class="product-showcase mt-3">

          <h2 class="title mt-5">WOMENS CATEGORY</h2>

          <div class="showcase-wrapper  has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img" width="70">
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
                <div class="more-content">
                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title"></h4>
                    </a>

                    <p class="showcase-category">RECENTLY BOUGHT BY-</p>

                    <div class="price-box">
                      <p class="price">340</p>

                    </div>

                  </div>
                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img" width="70">
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
                <div class="more-content">
                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title"></h4>
                    </a>

                    <p class="showcase-category">RECENTLY BOUGHT BY-</p>

                    <div class="price-box">
                      <p class="price">240</p>

                    </div>

                  </div>
                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img" width="70">
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
                <div class="more-content">
                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title"></h4>
                    </a>

                    <p class="showcase-category">RECENTLY BOUGHT BY-</p>

                    <div class="price-box">
                      <p class="price">140</p>

                    </div>

                  </div>
                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img" width="70">
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
                <div class="more-content">
                  <div class="showcase-content">

                    <a href="#">
                      <h4 class="showcase-title"></h4>
                    </a>

                    <p class="showcase-category">RECENTLY BOUGHT BY-</p>

                    <div class="price-box">
                      <p class="price">40</p>

                    </div>

                  </div>
                </div>

              </div>

            </div>


          </div>

        </div>

        <div class="product-showcase mt-3">

          <h2 class="title mt-5">MENS CATEGORY</h2>

          <div class="showcase-wrapper  has-scrollbar">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img" width="70">
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

                </div>




              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img" width="70">
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

                </div>


              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="<?php echo ASSETS . THEME ?>/images/products/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img" width="70">
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
                </div>



              </div>



            </div>



          </div>

        </div>


      </div>
    </div>
    <div class="product-showcase">

      <div class="containerRedeem">
        <h1>Redeem Rewards</h1>
        <div class="rowRedeem">
          <div class="serviceRedeem">
            <i class="fas fa-shirt"></i>
            <h2>Shirts</h2>
            <p>
              Redeem this reward for :
            </p>
            <p class="redeemBtn">100:POINTS</p>
          </div>
          <div class="serviceRedeem">
            <i class="fas fa-chart-line"></i>
            <h2>Pants</h2>
            <p>
              Redeem this reward for :
            </p>
            <p class="redeemBtn">100:POINTS</p>
          </div>
          <div class="serviceRedeem">
            <i class="fab fa-sketch"></i>
            <h2>Leggings</h2>
            <p>
              Redeem this reward for :
            </p>
            <p class="redeemBtn">500:POINTS</p>
          </div>
          <div class="serviceRedeem">
            <i class="fas fa-database"></i>
            <h2>T-Shirts</h2>
            <p>
              Redeem this reward for :
            </p>
            <p class="redeemBtn">150:POINTS</p>
          </div>
          <div class="serviceRedeem">
            <i class="fas fa-mobile-alt"></i>
            <h2>Top</h2>
            <p>
              Redeem this reward for :
            </p>
            <p class="redeemBtn">100:POINTS</p>
          </div>
          <div class="serviceRedeem">
            <i class="fas fa-file-invoice"></i>
            <h2>One Piece</h2>
            <p>
              Redeem this reward for :
            </p>
            <p class="redeemBtn">100:POINTS</p>
          </div>
        </div>
      </div>
    </div>

    <div class="testimonials-box graphsis ">
      <div class="product-showcase">
        <h2 class="title mt-5">PAYMENT AMOUNT</h2>
        <canvas style="display: block; box-sizing: border-box; height: 357.6px; width: 716px;" class="graphs" id="myChart"></canvas>
      </div>

      <div class="product-showcase">
        <h2 class="title mt-5">PRODUCTS BOUGHT</h2>
        <canvas class="graphs" id="myChartdonut"></canvas>
      </div>
      <div id="my-roadmap"></div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
  </div>
</div>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <div class="modal-content" id="modalInvoiceData">

  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo ASSETS . THEME ?>js/jquery.roadmap.js" type="text/javascript"></script>
<!-- below is the cdn for roadmap/timeline jquery -->
<!-- Chart.js cdn -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

</script>




<script type="text/javascript">
  $(document).ready(function() {
    <?php
    $roadmapData = [];
    foreach ($timeLineData as $entry) {
      if ($entry["transactionType"] == "order") {

        $formatted_date = date("my", strtotime($entry["dateIs"]));
        $number_of_digits = strlen((string)$entry["orderId"]);
        if ($number_of_digits == 3) {
          $endNumber = '0' . $entry["orderId"];
        } elseif ($number_of_digits == 2) {
          $endNumber = '00' . $entry["orderId"];
        } elseif ($number_of_digits == 1) {
          $endNumber = '000' . $entry["orderId"];
        }
        $particulars = 'CF/' . $formatted_date . '/INV' . $endNumber;

        $roadmapData[] = [
          "date" => $entry["dateIs"],
          "content" => "<a href='' class='invoiceNo' data-invoice-no='" . $entry["orderId"] . "'>" . $particulars . "</a>" . "<p class='amountTimeline'> ORDER OF:	&#8377 " . (int)$entry["amountIs"] . "</p>",

        ];
      } elseif($entry["transactionType"] == "pay"){

        $roadmapData[] = [
          "date" => $entry["dateIs"],
          "content" => "<p class='amountTimeline'>PAID TO CriO: &#8377 " . (int)$entry["amountIs"] . "</p>",
        ];
      }
    }
    ?>
    var timelinedatais = <?php echo json_encode($roadmapData); ?>


    $('#my-roadmap').roadmap(timelinedatais, {
      eventsPerSlide: 6,
      slide: 1,
      prevArrow: '<i class="material-icons">keyboard_arrow_left</i>',
      nextArrow: '<i class="material-icons">keyboard_arrow_right</i>',
      onBuild: function() {

        $('.invoiceNo').click(function(e) {
          e.preventDefault()
          var invoiceData = $(this).data('invoice-no');
          // console.log(invoiceData + 'invoice data');
          // get the ajax data TODO
          // Render the invoice TODO
          $.ajax({
            method: "POST",
            url: "<?= ROOT ?>ajax_ledgerInvoice",
            data: {
              data_type: 'invoice',
              invoiceData: invoiceData
            },

            success: function(response) {
              
             
              response = JSON.parse(response);
              const style = response.style;
              $('head style').remove();
               $('head').append(style);
              modal.css("display", "block");
              $('#modalInvoiceData').html(response.invoice)
            }
          });



        });
        // modal code
        // Get the modal and the close button
        var modal = $("#myModal");
        var closeBtn = $(".close");
        // Get the trigger button
        var triggerBtn = $(".invoiceNo");

        // Hide the modal when the close button is clicked
        closeBtn.click(function() {
          modal.css("display", "none");
          $('head style').remove();
        });

        // modal code ends here




      }
    });

  });
</script>

<script>

</script>

<script>
  // modal variables
  // const modal = document.querySelector('[data-modal]');
  // const modalCloseBtn = document.querySelector('[data-modal-close]');
  // const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

  // // modal function
  // const modalCloseFunc = function() {
  //   modal.classList.add('closed')
  // }

  // // modal eventListener
  // modalCloseOverlay.addEventListener('click', modalCloseFunc);
  // modalCloseBtn.addEventListener('click', modalCloseFunc);





  // // notification toast variables
  // const notificationToast = document.querySelector('[data-toast]');
  // const toastCloseBtn = document.querySelector('[data-toast-close]');

  // // notification toast eventListener
  // toastCloseBtn.addEventListener('click', function() {
  //   notificationToast.classList.add('closed');
  // });




  // IMP this can be uncommented below
  // mobile menu variables
  // const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
  // const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
  // const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
  // const overlay = document.querySelector('[data-overlay]');
  // console.log(mobileMenuCloseBtn);
  // for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  //   // mobile menu function
  //   const mobileMenuCloseFunc = function() {
  //     mobileMenu[i].classList.remove('active');
  //     overlay.classList.remove('active');
  //   }

  //   mobileMenuOpenBtn[i].addEventListener('click', function() {
  //     mobileMenu[i].classList.add('active');
  //     overlay.classList.add('active');
  //   });

  //   mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  //   overlay.addEventListener('click', mobileMenuCloseFunc);

  // }





  // accordion variables
  const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
  const accordion = document.querySelectorAll('[data-accordion]');

  for (let i = 0; i < accordionBtn.length; i++) {

    accordionBtn[i].addEventListener('click', function() {

      const clickedBtn = this.nextElementSibling.classList.contains('active');

      for (let i = 0; i < accordion.length; i++) {

        if (clickedBtn) break;

        if (accordion[i].classList.contains('active')) {

          accordion[i].classList.remove('active');
          accordionBtn[i].classList.remove('active');

        }

      }

      this.nextElementSibling.classList.toggle('active');
      this.classList.toggle('active');

    });

  }
</script>

<script>
  // CONFIG FOR THE RADAR CHART BELOW THE PROFILE PIC
  const data = {
    labels: [
      'Shirt',
      'Drinking',
      'Sleeping',
      'Designing',
      'Coding',
      'Cycling',
      'Running'
    ],
    datasets: [{
      label: 'WOMENS',
      data: [65, 59, 90, 81, 56, 55, 40],
      fill: true,
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      borderColor: 'rgb(255, 99, 132)',
      pointBackgroundColor: 'rgb(255, 99, 132)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgb(255, 99, 132)'
    }, {
      label: 'MENS',
      data: [28, 48, 40, 19, 96, 27, 100],
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgb(54, 162, 235)',
      pointBackgroundColor: 'rgb(54, 162, 235)',
      pointBorderColor: '#fff',
      pointHoverBackgroundColor: '#fff',
      pointHoverBorderColor: 'rgb(54, 162, 235)'
    }]
  };

  const config = {
    type: 'radar',
    data: data,
    options: {
      elements: {
        line: {
          borderWidth: 3
        }
      }
    },
  }

  const myChartradar = new Chart(
    document.getElementById('radar'),
    config
  );

  // THIS IS THE LABELS AND THE DATA FOR THE BAR CHART BELOW
  const labels1 = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data1 = {
    labels: labels1,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config1 = {
    type: 'line',
    data: data1,
    options: {}
  };
</script>



<script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config1
  );
</script>
<script>
  const dataDonut = {
    labels: [
      'leggings',
      'shorts',
      'pants'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };
  const configDonut = {
    type: 'doughnut',
    data: dataDonut,
  };
  const myChartDonut = new Chart(
    document.getElementById('myChartdonut'),
    configDonut
  );
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php $this->view("footer", $data); ?>