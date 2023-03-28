<?php 

include __DIR__ . "/Data/products.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include __DIR__ . "/Template/head.php"; ?>
</head>

<body>
  <?php include __DIR__ . "/Template/navbar.php"; ?>

  <div class="container pt-5 mt-5">
    <h4 class="my-3">
      Prodotti per i cani
    </h4>
    <div class="row row-cols-3 g-3">
    <?php foreach ($products_dog as $product) : ?>
      <!-- Inizio del blocco di codice per ogni prodotto -->

      <div class="col">
        <div class="card">
          <div class="card-body">
            <!-- Intestazione della carta con il nome del prodotto e la categoria -->
            <h5 class="card-title">
              <i class="<?= $product->getCategory()->icon ?>"></i>
              <?= $product->getName() ?>
              <small class="text-muted">
                <?= $product->getTextClassname() ?>
              </small>
            </h5>

            <!-- Sotto-intestazione della carta con alcune informazioni specifiche del prodotto -->
            <h6 class="card-subtitle mb-2 text-muted">
              <?php if ($product instanceof ProductBed || $product instanceof ProductFood) : ?>
                <span><?= $product->getFullWeight() ?></span>
              <?php endif; ?>

              <?php if ($product instanceof ProductBed || $product instanceof ProductToy) : ?>
                <span><?= $product->material ?></span>
              <?php endif; ?>

              <?php if ($product instanceof ProductFood) : ?>
                <span><?= $product->type ?></span>
              <?php endif; ?>
            </h6>

            <!-- Testo della carta con una descrizione del prodotto -->
            <p class="card-text">
              Lorem ipsum dolor sit, amet consectetur adipisicing.
            </p>

            <!-- Prezzo del prodotto -->
            <strong>€ <?= number_format($product->getPrice(), 2) ?></strong>

            <!-- Link per aggiungere il prodotto al carrello -->
            <br />
            <a href="#" class="card-link">Aggiungi al carrello</a>
          </div>
        </div>
      </div>

      <!-- Fine del blocco di codice per ogni prodotto -->
    <?php endforeach; ?>
    </div>

    <h4 class="my-3">
      Prodotti per i gatti
    </h4>
    <div class="row row-cols-3 g-3">
    <?php foreach ($products_cat as $product) : ?>
      <!-- Inizio del blocco di codice per ogni prodotto -->

      <div class="col">
        <div class="card">
          <div class="card-body">
            <!-- Intestazione della carta con il nome del prodotto e la categoria -->
            <h5 class="card-title">
              <i class="<?= $product->getCategory()->icon ?>"></i>
              <?= $product->getName() ?>
              <small class="text-muted">
                <?= $product->getTextClassname() ?>
              </small>
            </h5>

            <!-- Sotto-intestazione della carta con alcune informazioni specifiche del prodotto -->
            <h6 class="card-subtitle mb-2 text-muted">
              <?php if ($product instanceof ProductBed || $product instanceof ProductFood) : ?>
                <span><?= $product->getFullWeight() ?></span>
              <?php endif; ?>

              <?php if ($product instanceof ProductBed || $product instanceof ProductToy) : ?>
                <span><?= $product->material ?></span>
              <?php endif; ?>

              <?php if ($product instanceof ProductFood) : ?>
                <span><?= $product->type ?></span>
              <?php endif; ?>
            </h6>

            <!-- Testo della carta con una descrizione del prodotto -->
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing.
            </p>

            <!-- Prezzo del prodotto -->
            <strong>€ <?= number_format($product->getPrice(), 2) ?></strong>

            <!-- Link per aggiungere il prodotto al carrello -->
            <br />
            <a href="#" class="card-link">Aggiungi al carrello</a>
          </div>
        </div>
      </div>

      <!-- Fine del blocco di codice per ogni prodotto -->
    <?php endforeach; ?>

    </div>
  </div>
</body>

</html>