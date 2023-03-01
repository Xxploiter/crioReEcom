<style>
    .add-cart-btnproduct {
    background: var(--salmon-pink);
    font-size: 10px;
    padding: 8px 10px;
    color: var(--white);
    font-weight: var(--fs-9);
    text-transform: uppercase;
    border-radius: var(--border-radius-md);
    margin-bottom: 15px;
    transition: var(--transition-timing);
}
</style>
<div class="showcase">

<div class="showcase-banner">

  <img src="<?php echo ROOT ?><?= $data->image1 ?>" alt="<?= $data->title ?>" width="300" class="product-img default">
  <img src="<?php echo ROOT ?><?= $data->image2 ?>" alt="<?= $data->title ?>" width="300" class="product-img hover">

  <p class="showcase-badge">15%</p>

  <div class="showcase-actions">

    <button class="btn-action">
      <ion-icon name="heart-outline"></ion-icon>
    </button>

    <button class="btn-action">
      <ion-icon name="eye-outline"></ion-icon>
    </button>

    <button class="btn-action">
      <ion-icon name="repeat-outline"></ion-icon>
    </button>

    <button class="btn-action">
      <ion-icon name="bag-add-outline"></ion-icon>
    </button>

  </div>

</div>

<div class="showcase-content">

  <a href="#" class="showcase-category"><?= $data->category ?></a>


  <a href="<?php echo ROOT ?>productDetails/<?= $data->id ?>">
    <h3 class="showcase-title"><?= $data->name ?></h3>
  </a>

  <div class="showcase-rating">
    <ion-icon name="star"></ion-icon>
    <ion-icon name="star"></ion-icon>
    <ion-icon name="star"></ion-icon>
    <ion-icon name="star-outline"></ion-icon>
    <ion-icon name="star-outline"></ion-icon>
  </div>

  <div class="price-box">
    <p class="price">$<?= $data->price ?></p>
    <del>$75.00</del>
  </div>
  <a href="<?= ROOT ?>addToCart/<?= $data->id?>"><button class="add-cart-btnproduct">add to cart</button></a> 
</div>

</div>
