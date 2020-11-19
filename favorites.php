<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Избранное</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include 'header.php' ?>
  <div class="content">
    <h2 class="title-2">Избранное</h2>
    <div class="container">
      <div class="product-card-cart">
        <div class="row">
          <div class="col-md-4 col-3">
            <div class="product-card-cart__img">
              <img src="img/r2d2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-8 col-9">
            <div class="product-card-cart__info product-card-cart__info_izbr">
              <div class="product-card-cart__name product-card-cart__name_izbr">
                Именной биоробот R2D2
              </div>
              <div class="product-card-cart__cost product-card-cart__cost_izbr">
                11000 $
              </div>
              <div class="product-card-cart__delete product-card-cart__delete_izbr">
                <button>Удалить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-card-cart">
        <div class="row">
          <div class="col-md-4 col-3">
            <div class="product-card-cart__img">
              <img src="img/r2d2.jpg" alt="">
            </div>
          </div>
          <div class="col-md-8 col-9">
            <div class="product-card-cart__info product-card-cart__info_izbr">
              <div class="product-card-cart__name product-card-cart__name_izbr">
                Именной биоробот R2D2
              </div>
              <div class="product-card-cart__cost product-card-cart__cost_izbr">
                11000 $
              </div>
              <div class="product-card-cart__delete product-card-cart__delete_izbr">
                <button>Удалить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
