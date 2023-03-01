<?php $this->view("header", $data); ?>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<link href="<?php echo ASSETS . THEME  ?>css/jquery.roadmap.min.css" rel="stylesheet" type="text/css" />
<style>
  .close{
    cursor: pointer;
    width: 26px;
    color: aqua;
    background-color: aliceblue;
    text-align: center;
    font-size: 21px;
    margin-left: 8px;
    margin-top: 8px;
  }
  .modal {
    animation: popup .5s ease-in-out .5s forwards;
  }

  .showcase-status-bar {
    background: var(--cultured);
    position: relative;
    height: 10px;
    border-radius: 5px;

  }

  .testimonials-box {

    justify-content: center;
  }

  .showcase-status-bar::before {
    position: absolute;
    content: '';
    top: 3px;
    left: 3px;
    height: 4px;
    width: 40%;
    background: var(--salmon-pink);
    border-radius: 4px;
  }

  .showcase-status .wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--eerie-black);
    font-size: var(--fs-9);
    font-weight: var(--weight-400);
    text-transform: uppercase;
    margin-bottom: 10px;
  }

  /*-------- flex container --------*/
  .amountTimeline {
    font-size: var(--fs-7);
    font-weight: var(--weight-700);
    color: var(--salmon-pink);
  }
</style>
<style>
  .graphs {
    width: 21rem;
  }

  .graphsis {
    justify-content: space-between;
  }

  /* timeline color */
  .roadmap.roadmap--orientation-auto .roadmap__events:after {
    position: absolute;
    top: 50%;
    left: 0;
    display: block;
    content: "";
    width: 0%;
    height: 4px;
    background-color: #FF8F9C;
    border-radius: 2px;
    -webkit-transition: all .5s linear;
    -o-transition: all .5s linear;
    transition: all .5s linear;
  }

  .roadmap.roadmap--orientation-auto .roadmap__events__event:after,
  .roadmap.roadmap--orientation-auto .roadmap__events__event:before {
    position: absolute;
    content: "";
    display: block;
    background-color: #FF8F9C;
    -webkit-transition: all .3s cubic-bezier(.25, .1, .25, 1.3);
    -o-transition: all .3s cubic-bezier(.25, .1, .25, 1.3);
    transition: all .3s cubic-bezier(.25, .1, .25, 1.3);
  }

  /* Style for apex chart */
  @import url(https://fonts.googleapis.com/css?family=Roboto);

  body{
    font-family: Roboto, sans-serif;
    }

  #chart{
    max-width: 650px;
    margin: 35px auto;
    }
</style>

<div class="main margin2">
  <div class="container">
    <h2>DASHBOARD</h2>
    <div class="testimonials-box mt-5">
      <div class="row">
        <!-- flex-container -->

        <!-- /flex-container -->
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
      <h2>MOST SELLING PRODUCTS AND THEIR CATEGORIES</h2>

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

    <div class="testimonials-box graphsis ">
      <div class="product-showcase">
        <h2 class="title mt-5">PAYMENT AMOUNT</h2>
        <canvas style="display: block; box-sizing: border-box; height: 357.6px; width: 716px;" class="graphs" id="myChart"></canvas>
      </div>

      <div class="product-showcase">
        <h2 class="title mt-5">AMOUNT OF PRODUCTS BOUGHT IN LAST 6 MONTH</h2>
        <canvas class="graphs" id="myChartdonut"></canvas>
      </div>
      <div class="product-showcase">
        <h2 class="title mt-5">QUANTITY OF PRODUCTS BOUGHT IN LAST 6 MONTH</h2>
        <canvas class="graphs" id="prodQty"></canvas>
      </div>
      <div id="my-roadmap"></div>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </div>
  </div>
</div>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <div class="modal-content">

    <p id="modalInvoiceData"></p>
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
      } else {

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
          modal.css("display", "block");
          $('#modalInvoiceData').text(invoiceData)

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
        });

        // modal code ends here




      }
    });

  });
</script>

<script>

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

<!-- // Devlopment by souvik starts -->
<script>
  // product data from php
  const mostSellingProd=<?php echo json_encode($data['mostSellingProduct']) ;?>;
</script>
<!--Graph fro product vs amount of product bought in last 6 month -->
<script>
  const dataDonut = {
    labels:mostSellingProd.product,
    datasets: [{
      label: 'Amount',
      data:mostSellingProd.amount,
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

<script>
  // Graph for product vs quantity of the total product bought in last 6 month
  const dataQtyChart = {
    labels: mostSellingProd.product,
    datasets: [{
      label: 'Quantity',
      data: mostSellingProd.quantity,
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };
  const configQtyChart = {
    type: 'doughnut',
    data: dataQtyChart,
  };
  const prodQty = new Chart(
    document.getElementById('prodQty'),
    configQtyChart
  );
          
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php $this->view("footer", $data); ?>