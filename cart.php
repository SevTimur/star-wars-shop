<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Корзина</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php include 'header.php' ?>
  <div class="content">
    <h2 class="title-2">Корзина</h2>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-9">
          <div class="product-card-cart">
            <div class="row">
              <div class="col-md-4 col-3">
                <div class="product-card-cart__img">
                  <img src="img/r2d2.jpg" alt="">
                </div>
              </div>
              <div class="col-md-8 col-9">
                <div class="product-card-cart__info">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="product-card-cart__name">
                        Именной биоробот R2D2
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="row">
                        <div class="col-6">
                          <div class="number-switching number-switching_cart">
                            <button class="number-switching__switch number-switching__switch_minus">
                            </button>
                            <div class="number-switching__number">
                              1
                            </div>
                            <button class="number-switching__switch number-switching__switch_plus">
                            </button>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="product-card-cart__cost">
                            11000 $
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-card-cart__delete">
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
                <div class="product-card-cart__info">
                  <div class="row">
                    <div class="col-lg-6 col-12">
                      <div class="product-card-cart__name">
                        Именной биоробот R2D2
                      </div>
                    </div>
                    <div class="col-lg-6 col-12">
                      <div class="row">
                        <div class="col-6">
                          <div class="number-switching number-switching_cart">
                            <button class="number-switching__switch number-switching__switch_minus">
                            </button>
                            <div class="number-switching__number">
                              1
                            </div>
                            <button class="number-switching__switch number-switching__switch_plus">
                            </button>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="product-card-cart__cost">
                            11000 $
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="product-card-cart__delete">
                    <button>Удалить</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3">
          <div class="order-info">
            <div class="order-info__number">
              Заказ №17
            </div>
            <div class="order-info__row">
              <div class="order-info__characteristic">
                Сумма
              </div>
              <div class="order-info__value">
                100500$
              </div>
            </div>
            <div class="order-info__row">
              <div class="order-info__characteristic">
                Доставка
              </div>
              <div class="order-info__value">
                Бесплатно
              </div>
            </div>
            <div class="order-info__sum">
              <div class="d-flex flex-row justify-content-between">
                <div class="order-info_itogo_name">
                  Итого
                </div>
                <div class="order-info_itogo_number">
                  100500$
                </div>
              </div>
            </div>
            <a href="" class="order-info__button">
              Заказать
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
