<?php $this->view("header", $data); ?>

<div class="main margin2">
    <div class="container">
        <div class="testimonials-box">

          <!--
                - Profile card
          -->

          <div class="testimonial">

            <h2 class="title">DASHBOARD</h2>

            <div class="testimonial-card">

              <img src="<?php  echo ASSETS. THEME ?>/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner"
                width="80" height="80">

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



          <!--
                - CTA
              -->

          <div class="cta-container">

            <img src="<?php  echo ASSETS. THEME ?>/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">CUSTOM ADVERTISEMENT</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
                - SERVICE
              -->

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
    

      <div class="product-box">
        <h2>MOST SELLING PRODUCTS AND THEIR CATEGORIES</h2>

        <div class="product-minimal">

          <div class="product-showcase">

            <h2 class="title">WOMENS CATEGORY</h2>

            <div class="showcase-wrapper  has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/sports-1.jpg"
                      alt="running & trekking shoes - white" class="showcase-img" width="70">
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
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/sports-2.jpg"
                      alt="trekking & running shoes - black" class="showcase-img" width="70">
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
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/party-wear-1.jpg"
                      alt="womens party wear shoes" class="showcase-img" width="70">
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
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/sports-3.jpg" alt="sports claw women's shoes"
                      class="showcase-img" width="70">
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

          <div class="product-showcase">

            <h2 class="title">MENS CATEGORY</h2>

            <div class="showcase-wrapper  has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/watch-3.jpg" alt="pocket watch leather pouch"
                      class="showcase-img" width="70">
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
                  <div class="more-content">
                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title"></h4>
                      </a>

                      <p class="showcase-category">RECENTLY BOUGHT BY-</p>

                      <div class="price-box">
                        <p class="price">940</p>

                      </div>

                    </div>
                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/jewellery-3.jpg"
                      alt="silver deer heart necklace" class="showcase-img" width="70">
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
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/perfume.jpg"
                      alt="titan 100 ml womens perfume" class="showcase-img" width="70">
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
                  <div class="more-content">
                    <div class="showcase-content">

                      <a href="#">
                        <h4 class="showcase-title"></h4>
                      </a>

                      <p class="showcase-category">RECENTLY BOUGHT BY-</p>

                      <div class="price-box">
                        <p class="price">740</p>

                      </div>

                    </div>
                  </div>

                </div>

                <div class="showcase">

                  <a href="#" class="showcase-img-box">
                    <img src="<?php  echo ASSETS. THEME ?>/images/products/belt.jpg" alt="men's leather reversible belt"
                      class="showcase-img" width="70">
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

              </div>



            </div>

          </div>


        </div>
      </div>

      <div>
        <canvas id="myChart"></canvas>
      </div>
    </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);





// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

// notification toast eventListener
toastCloseBtn.addEventListener('click', function () {
  notificationToast.classList.add('closed');
});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');
console.log(mobileMenuCloseBtn);
for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

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
        'Eating',
        'Drinking',
        'Sleeping',
        'Designing',
        'Coding',
        'Cycling',
        'Running'
      ],
      datasets: [{
        label: 'ORDERS PLACED',
        data: [65, 59, 90, 81, 56, 55, 40],
        fill: true,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgb(255, 99, 132)',
        pointBackgroundColor: 'rgb(255, 99, 132)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(255, 99, 132)'
      }, {
        label: 'SOMEOTHER DATA',
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

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<?php $this->view("footer", $data); ?>