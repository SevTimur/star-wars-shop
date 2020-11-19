<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Товар</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include 'header.php' ?>
  <div class="content">
    <div class="breadcrumb-block">
      <div class="container">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Главная</a>
          </li>
          <li class="breadcrumb-item">
            <a href="products.php">Каталог</a>
          </li>
          <li class="breadcrumb-item">
            <a href="products.php">Вид товара</a>
          </li>
          <li class="breadcrumb-item">
            <a href="products.php">Товар</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container">
      <h2 class="title-2">
        Наименование товара
      </h2>
      <div class="product-block">
        <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="product-slider-big">
              <div class="product-slider-big__item">
                <img src="img/r2d2.jpg" alt="">
              </div>
              <div class="product-slider-big__item">
                <img src="img/mando.jpg" alt="">
              </div>
              <div class="product-slider-big__item">
                <img src="img/eta-2.png" alt="">
              </div>
              <div class="product-slider-big__item">
                <img src="img/mando.jpg" alt="">
              </div>
              <div class="product-slider-big__item">
                <img src="img/eta-2.png" alt="">
              </div>
            </div>
            <div class="product-slider-small">
              <div class="product-slider-small__item">
                <img src="img/r2d2.jpg" alt="">
              </div>
              <div class="product-slider-small__item">
                <img src="img/mando.jpg" alt="">
              </div>
              <div class="product-slider-small__item">
                <img src="img/eta-2.png" alt="">
              </div>
              <div class="product-slider-small__item">
                <img src="img/mando.jpg" alt="">
              </div>
              <div class="product-slider-small__item">
                <img src="img/eta-2.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 col-sm-12">
            <div class="d-flex flex-column justify-content-between h-100">
              <ul class="product-specifications">
                <li class="product-specifications__item">
                  <div class="product-specifications__characteristic">Производитель</div>
                  <div class="product-specifications__line"></div>
                  <div class="product-specifications__value">Татуин</div>
                </li>
                <li class="product-specifications__item">
                  <div class="product-specifications__characteristic">Производитель</div>
                  <div class="product-specifications__line"></div>
                  <div class="product-specifications__value">Татуин</div>
                </li>
                <li class="product-specifications__item">
                  <div class="product-specifications__characteristic">Производитель</div>
                  <div class="product-specifications__line"></div>
                  <div class="product-specifications__value">Татуин</div>
                </li>
                <li class="product-specifications__item">
                  <div class="product-specifications__characteristic">Производитель</div>
                  <div class="product-specifications__line"></div>
                  <div class="product-specifications__value">Корусант</div>
                </li>
                <li class="product-specifications__item">
                  <div class="product-specifications__characteristic">Производитель</div>
                  <div class="product-specifications__line"></div>
                  <div class="product-specifications__value">Татуин</div>
                </li>
              </ul>
              <div class="d-flex flex-column">
                <div class="product-price product-price_modal">
                  <div class="product-price__old product-price__old_modal">
                    15000 $
                  </div>
                  <div class="product-price__actual product-price__actual_start">
                    <div class="product-price__new product-price__new_modal">
                      4000 $
                    </div>
                    <div class="product-price__quantity">
                      за 1 шт
                    </div>
                  </div>
                </div>
                <div class="product-block__control">
                  <div class="number-switching number-switching_modal">
                    <button class="number-switching__switch number-switching__switch_minus">
                    </button>
                    <div class="number-switching__number">
                      1
                    </div>
                    <button class="number-switching__switch number-switching__switch_plus">
                    </button>
                  </div>
                  <div class="sum-price sum-price_product-block">
                    <div class="sum-price__name">
                      Цена:
                    </div>
                    <div class="sum-price__total">
                      11111 $ за 1 шт
                    </div>
                  </div>
                </div>
                <button class="product-block__in-cart hov-white">
                  В корзину
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-description">
        <h3 class="title-3">
          Описание
        </h3>
        <div class="product-description__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
    <div class="product-row product-row_grey">
      <div class="container">
        <h2 class="title-2">Дроиды</h2>
        <div class="product-row__see-all">
          <div class="see-all__content">
            <a class="see-all__text" href="products.php">Смотреть все товары</a>
            <svg width="4" height="7" viewBox="0 0 4 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.135499 6.7718C0.0560033 6.71164 0.00756402 6.62686 0.00081296 6.53607C-0.00593833 6.44528 0.0295505 6.3559 0.0994899 6.28755L3.06426 3.42324L0.0994901 0.558934C0.034821 0.490015 0.0036404 0.402328 0.0124488 0.314157C0.0212572 0.225986 0.0443089 0.148884 0.14677 0.0856743C0.24923 0.0224643 0.324862 -0.00334974 0.427866 0.00036081C0.53087 0.00407136 0.62823 0.0417679 0.699646 0.105591L3.90048 3.19657C3.96462 3.25924 4 3.33982 4 3.42324C4 3.50667 3.96462 3.58724 3.90048 3.64991L0.699646 6.74089C0.629556 6.80913 0.530788 6.85071 0.425021 6.8565C0.319253 6.8623 0.215128 6.83184 0.135499 6.7718Z" fill="#FB4B54"/>
            </svg>
          </div>
        </div>
        <div class="product__row">
          <a href="product.php" class="product-card">
            <object>
              <a class="izbr-button">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M14.5818 1C12.2909 1 10.7363 2.22727 9.99994 3.12727C9.26358 2.30909 7.70904 1 5.41813 1C2.30904 1 0.181763 3.94546 0.181763 7.21818C0.181763 9.67273 1.40904 14.4182 9.67267 18.9182C9.83631 19 10.0818 19 10.3272 18.9182C18.5909 14.4182 19.8181 9.67273 19.8181 7.21818C19.8181 3.86364 17.6909 1 14.5818 1ZM9.99994 17.6091C5.99085 15.4 1.49085 11.7182 1.49085 7.21818C1.49085 4.68182 2.96358 2.30909 5.41813 2.30909C7.21813 2.30909 8.77267 3.45455 9.42722 4.51818C9.67267 4.92727 10.2454 4.92727 10.5727 4.51818C10.5727 4.51818 11.9636 2.30909 14.5818 2.30909C17.0363 2.30909 18.509 4.68182 18.509 7.21818C18.509 11.7182 14.009 15.4 9.99994 17.6091Z" fill="#FB4B54" stroke="white" stroke-width="0.25" stroke-miterlimit="10"/>
                  </g>
                  <rect x="19.8182" y="13.6235" width="4.20779" height="9.81818" rx="2" transform="rotate(90 19.8182 13.6235)" fill="white"/>
                  <rect x="12.8051" y="10.8182" width="4.20779" height="9.81818" rx="2" fill="white"/>
                  <rect x="18.4156" y="15.0259" width="1.4026" height="7.01299" rx="0.701299" transform="rotate(90 18.4156 15.0259)" fill="#FB4B54"/>
                  <rect x="14.2078" y="12.2206" width="1.4026" height="7.01299" rx="0.701299" fill="#FB4B54"/>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="19.6364" height="19.6364" fill="white" transform="translate(0.181763 0.181824)"/>
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </object>
            <object>
              <a data-toggle="modal" data-target="#button_tovar" class="product-card__search d-flex">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3617 12.7518L10.017 9.28631C10.8769 8.26788 11.3481 6.98648 11.3481 5.65249C11.3481 2.53576 8.8027 0 5.67407 0C2.54544 0 0 2.53576 0 5.65249C0 8.76923 2.54544 11.305 5.67407 11.305C6.8486 11.305 7.96787 10.9521 8.92482 10.2821L12.295 13.7739C12.4358 13.9196 12.6253 14 12.8283 14C13.0205 14 13.2028 13.927 13.3412 13.7943C13.6353 13.5124 13.6447 13.045 13.3617 12.7518ZM5.67407 1.47456C7.98662 1.47456 9.86795 3.34873 9.86795 5.65249C9.86795 7.95625 7.98662 9.83043 5.67407 9.83043C3.36152 9.83043 1.48019 7.95625 1.48019 5.65249C1.48019 3.34873 3.36152 1.47456 5.67407 1.47456Z" fill="#FB4B54"/>
                </svg>
              </a>
            </object>
            <div class="product-card__img">
              <img src="img/c3po.png" alt="">
            </div>
            <div class="product-card__content">
              <div class="product-card__name">
                C-3PO
              </div>
              <div class="product-card__info">
                <div class="product-price">
                  <div class="product-price__old">
                    15000 $
                  </div>
                  <div class="product-price__actual">
                    <div class="product-price__new">
                      4000 $
                    </div>
                    <div class="product-price__quantity">
                      за 1 шт
                    </div>
                  </div>
                </div>
                <object>
                  <a data-toggle="modal" data-target="#button-tovar-v-korzine" class="in-cart">
                    В корзину
                  </a>
                </object>
              </div>
            </div>
          </a>
          <a href="product.php" class="product-card">
            <object>
              <a class="izbr-button">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M14.5818 1C12.2909 1 10.7363 2.22727 9.99994 3.12727C9.26358 2.30909 7.70904 1 5.41813 1C2.30904 1 0.181763 3.94546 0.181763 7.21818C0.181763 9.67273 1.40904 14.4182 9.67267 18.9182C9.83631 19 10.0818 19 10.3272 18.9182C18.5909 14.4182 19.8181 9.67273 19.8181 7.21818C19.8181 3.86364 17.6909 1 14.5818 1ZM9.99994 17.6091C5.99085 15.4 1.49085 11.7182 1.49085 7.21818C1.49085 4.68182 2.96358 2.30909 5.41813 2.30909C7.21813 2.30909 8.77267 3.45455 9.42722 4.51818C9.67267 4.92727 10.2454 4.92727 10.5727 4.51818C10.5727 4.51818 11.9636 2.30909 14.5818 2.30909C17.0363 2.30909 18.509 4.68182 18.509 7.21818C18.509 11.7182 14.009 15.4 9.99994 17.6091Z" fill="#FB4B54" stroke="white" stroke-width="0.25" stroke-miterlimit="10"/>
                  </g>
                  <rect x="19.8182" y="13.6235" width="4.20779" height="9.81818" rx="2" transform="rotate(90 19.8182 13.6235)" fill="white"/>
                  <rect x="12.8051" y="10.8182" width="4.20779" height="9.81818" rx="2" fill="white"/>
                  <rect x="18.4156" y="15.0259" width="1.4026" height="7.01299" rx="0.701299" transform="rotate(90 18.4156 15.0259)" fill="#FB4B54"/>
                  <rect x="14.2078" y="12.2206" width="1.4026" height="7.01299" rx="0.701299" fill="#FB4B54"/>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="19.6364" height="19.6364" fill="white" transform="translate(0.181763 0.181824)"/>
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </object>
            <object>
              <a data-toggle="modal" data-target="#button_tovar" class="product-card__search d-flex">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3617 12.7518L10.017 9.28631C10.8769 8.26788 11.3481 6.98648 11.3481 5.65249C11.3481 2.53576 8.8027 0 5.67407 0C2.54544 0 0 2.53576 0 5.65249C0 8.76923 2.54544 11.305 5.67407 11.305C6.8486 11.305 7.96787 10.9521 8.92482 10.2821L12.295 13.7739C12.4358 13.9196 12.6253 14 12.8283 14C13.0205 14 13.2028 13.927 13.3412 13.7943C13.6353 13.5124 13.6447 13.045 13.3617 12.7518ZM5.67407 1.47456C7.98662 1.47456 9.86795 3.34873 9.86795 5.65249C9.86795 7.95625 7.98662 9.83043 5.67407 9.83043C3.36152 9.83043 1.48019 7.95625 1.48019 5.65249C1.48019 3.34873 3.36152 1.47456 5.67407 1.47456Z" fill="#FB4B54"/>
                </svg>
              </a>
            </object>
            <div class="product-card__img">
              <img src="img/c3po.png" alt="">
            </div>
            <div class="product-card__content">
              <div class="product-card__name">
                C-3PO
              </div>
              <div class="product-card__info">
                <div class="product-price">
                  <div class="product-price__old">
                    15000 $
                  </div>
                  <div class="product-price__actual">
                    <div class="product-price__new">
                      4000 $
                    </div>
                    <div class="product-price__quantity">
                      за 1 шт
                    </div>
                  </div>
                </div>
                <object>
                  <a data-toggle="modal" data-target="#button-tovar-v-korzine" class="in-cart">
                    В корзину
                  </a>
                </object>
              </div>
            </div>
          </a>
          <a href="product.php" class="product-card hidden-sm">
            <object>
              <a class="izbr-button">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M14.5818 1C12.2909 1 10.7363 2.22727 9.99994 3.12727C9.26358 2.30909 7.70904 1 5.41813 1C2.30904 1 0.181763 3.94546 0.181763 7.21818C0.181763 9.67273 1.40904 14.4182 9.67267 18.9182C9.83631 19 10.0818 19 10.3272 18.9182C18.5909 14.4182 19.8181 9.67273 19.8181 7.21818C19.8181 3.86364 17.6909 1 14.5818 1ZM9.99994 17.6091C5.99085 15.4 1.49085 11.7182 1.49085 7.21818C1.49085 4.68182 2.96358 2.30909 5.41813 2.30909C7.21813 2.30909 8.77267 3.45455 9.42722 4.51818C9.67267 4.92727 10.2454 4.92727 10.5727 4.51818C10.5727 4.51818 11.9636 2.30909 14.5818 2.30909C17.0363 2.30909 18.509 4.68182 18.509 7.21818C18.509 11.7182 14.009 15.4 9.99994 17.6091Z" fill="#FB4B54" stroke="white" stroke-width="0.25" stroke-miterlimit="10"/>
                  </g>
                  <rect x="19.8182" y="13.6235" width="4.20779" height="9.81818" rx="2" transform="rotate(90 19.8182 13.6235)" fill="white"/>
                  <rect x="12.8051" y="10.8182" width="4.20779" height="9.81818" rx="2" fill="white"/>
                  <rect x="18.4156" y="15.0259" width="1.4026" height="7.01299" rx="0.701299" transform="rotate(90 18.4156 15.0259)" fill="#FB4B54"/>
                  <rect x="14.2078" y="12.2206" width="1.4026" height="7.01299" rx="0.701299" fill="#FB4B54"/>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="19.6364" height="19.6364" fill="white" transform="translate(0.181763 0.181824)"/>
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </object>
            <object>
              <a data-toggle="modal" data-target="#button_tovar" class="product-card__search d-flex">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3617 12.7518L10.017 9.28631C10.8769 8.26788 11.3481 6.98648 11.3481 5.65249C11.3481 2.53576 8.8027 0 5.67407 0C2.54544 0 0 2.53576 0 5.65249C0 8.76923 2.54544 11.305 5.67407 11.305C6.8486 11.305 7.96787 10.9521 8.92482 10.2821L12.295 13.7739C12.4358 13.9196 12.6253 14 12.8283 14C13.0205 14 13.2028 13.927 13.3412 13.7943C13.6353 13.5124 13.6447 13.045 13.3617 12.7518ZM5.67407 1.47456C7.98662 1.47456 9.86795 3.34873 9.86795 5.65249C9.86795 7.95625 7.98662 9.83043 5.67407 9.83043C3.36152 9.83043 1.48019 7.95625 1.48019 5.65249C1.48019 3.34873 3.36152 1.47456 5.67407 1.47456Z" fill="#FB4B54"/>
                </svg>
              </a>
            </object>
            <div class="product-card__img">
              <img src="img/c3po.png" alt="">
            </div>
            <div class="product-card__content">
              <div class="product-card__name">
                C-3PO
              </div>
              <div class="product-card__info">
                <div class="product-price">
                  <div class="product-price__old">
                    15000 $
                  </div>
                  <div class="product-price__actual">
                    <div class="product-price__new">
                      4000 $
                    </div>
                    <div class="product-price__quantity">
                      за 1 шт
                    </div>
                  </div>
                </div>
                <object>
                  <a data-toggle="modal" data-target="#button-tovar-v-korzine" class="in-cart">
                    В корзину
                  </a>
                </object>
              </div>
            </div>
          </a>
          <a href="product.php" class="product-card hidden-md">
            <object>
              <a class="izbr-button">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M14.5818 1C12.2909 1 10.7363 2.22727 9.99994 3.12727C9.26358 2.30909 7.70904 1 5.41813 1C2.30904 1 0.181763 3.94546 0.181763 7.21818C0.181763 9.67273 1.40904 14.4182 9.67267 18.9182C9.83631 19 10.0818 19 10.3272 18.9182C18.5909 14.4182 19.8181 9.67273 19.8181 7.21818C19.8181 3.86364 17.6909 1 14.5818 1ZM9.99994 17.6091C5.99085 15.4 1.49085 11.7182 1.49085 7.21818C1.49085 4.68182 2.96358 2.30909 5.41813 2.30909C7.21813 2.30909 8.77267 3.45455 9.42722 4.51818C9.67267 4.92727 10.2454 4.92727 10.5727 4.51818C10.5727 4.51818 11.9636 2.30909 14.5818 2.30909C17.0363 2.30909 18.509 4.68182 18.509 7.21818C18.509 11.7182 14.009 15.4 9.99994 17.6091Z" fill="#FB4B54" stroke="white" stroke-width="0.25" stroke-miterlimit="10"/>
                  </g>
                  <rect x="19.8182" y="13.6235" width="4.20779" height="9.81818" rx="2" transform="rotate(90 19.8182 13.6235)" fill="white"/>
                  <rect x="12.8051" y="10.8182" width="4.20779" height="9.81818" rx="2" fill="white"/>
                  <rect x="18.4156" y="15.0259" width="1.4026" height="7.01299" rx="0.701299" transform="rotate(90 18.4156 15.0259)" fill="#FB4B54"/>
                  <rect x="14.2078" y="12.2206" width="1.4026" height="7.01299" rx="0.701299" fill="#FB4B54"/>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="19.6364" height="19.6364" fill="white" transform="translate(0.181763 0.181824)"/>
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </object>
            <object>
              <a data-toggle="modal" data-target="#button_tovar" class="product-card__search d-flex">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3617 12.7518L10.017 9.28631C10.8769 8.26788 11.3481 6.98648 11.3481 5.65249C11.3481 2.53576 8.8027 0 5.67407 0C2.54544 0 0 2.53576 0 5.65249C0 8.76923 2.54544 11.305 5.67407 11.305C6.8486 11.305 7.96787 10.9521 8.92482 10.2821L12.295 13.7739C12.4358 13.9196 12.6253 14 12.8283 14C13.0205 14 13.2028 13.927 13.3412 13.7943C13.6353 13.5124 13.6447 13.045 13.3617 12.7518ZM5.67407 1.47456C7.98662 1.47456 9.86795 3.34873 9.86795 5.65249C9.86795 7.95625 7.98662 9.83043 5.67407 9.83043C3.36152 9.83043 1.48019 7.95625 1.48019 5.65249C1.48019 3.34873 3.36152 1.47456 5.67407 1.47456Z" fill="#FB4B54"/>
                </svg>
              </a>
            </object>
            <div class="product-card__img">
              <img src="img/c3po.png" alt="">
            </div>
            <div class="product-card__content">
              <div class="product-card__name">
                C-3PO
              </div>
              <div class="product-card__info">
                <div class="product-price">
                  <div class="product-price__old">
                    15000 $
                  </div>
                  <div class="product-price__actual">
                    <div class="product-price__new">
                      4000 $
                    </div>
                    <div class="product-price__quantity">
                      за 1 шт
                    </div>
                  </div>
                </div>
                <object>
                  <a data-toggle="modal" data-target="#button-tovar-v-korzine" class="in-cart">
                    В корзину
                  </a>
                </object>
              </div>
            </div>
          </a>
          <a href="product.php" class="product-card hidden-lg">
            <object>
              <a class="izbr-button">
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0)">
                    <path d="M14.5818 1C12.2909 1 10.7363 2.22727 9.99994 3.12727C9.26358 2.30909 7.70904 1 5.41813 1C2.30904 1 0.181763 3.94546 0.181763 7.21818C0.181763 9.67273 1.40904 14.4182 9.67267 18.9182C9.83631 19 10.0818 19 10.3272 18.9182C18.5909 14.4182 19.8181 9.67273 19.8181 7.21818C19.8181 3.86364 17.6909 1 14.5818 1ZM9.99994 17.6091C5.99085 15.4 1.49085 11.7182 1.49085 7.21818C1.49085 4.68182 2.96358 2.30909 5.41813 2.30909C7.21813 2.30909 8.77267 3.45455 9.42722 4.51818C9.67267 4.92727 10.2454 4.92727 10.5727 4.51818C10.5727 4.51818 11.9636 2.30909 14.5818 2.30909C17.0363 2.30909 18.509 4.68182 18.509 7.21818C18.509 11.7182 14.009 15.4 9.99994 17.6091Z" fill="#FB4B54" stroke="white" stroke-width="0.25" stroke-miterlimit="10"/>
                  </g>
                  <rect x="19.8182" y="13.6235" width="4.20779" height="9.81818" rx="2" transform="rotate(90 19.8182 13.6235)" fill="white"/>
                  <rect x="12.8051" y="10.8182" width="4.20779" height="9.81818" rx="2" fill="white"/>
                  <rect x="18.4156" y="15.0259" width="1.4026" height="7.01299" rx="0.701299" transform="rotate(90 18.4156 15.0259)" fill="#FB4B54"/>
                  <rect x="14.2078" y="12.2206" width="1.4026" height="7.01299" rx="0.701299" fill="#FB4B54"/>
                  <defs>
                    <clipPath id="clip0">
                      <rect width="19.6364" height="19.6364" fill="white" transform="translate(0.181763 0.181824)"/>
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </object>
            <object>
              <a data-toggle="modal" data-target="#button_tovar" class="product-card__search d-flex">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.3617 12.7518L10.017 9.28631C10.8769 8.26788 11.3481 6.98648 11.3481 5.65249C11.3481 2.53576 8.8027 0 5.67407 0C2.54544 0 0 2.53576 0 5.65249C0 8.76923 2.54544 11.305 5.67407 11.305C6.8486 11.305 7.96787 10.9521 8.92482 10.2821L12.295 13.7739C12.4358 13.9196 12.6253 14 12.8283 14C13.0205 14 13.2028 13.927 13.3412 13.7943C13.6353 13.5124 13.6447 13.045 13.3617 12.7518ZM5.67407 1.47456C7.98662 1.47456 9.86795 3.34873 9.86795 5.65249C9.86795 7.95625 7.98662 9.83043 5.67407 9.83043C3.36152 9.83043 1.48019 7.95625 1.48019 5.65249C1.48019 3.34873 3.36152 1.47456 5.67407 1.47456Z" fill="#FB4B54"/>
                </svg>
              </a>
            </object>
            <div class="product-card__img">
              <img src="img/c3po.png" alt="">
            </div>
            <div class="product-card__content">
              <div class="product-card__name">
                C-3PO
              </div>
              <div class="product-card__info">
                <div class="product-price">
                  <div class="product-price__old">
                    15000 $
                  </div>
                  <div class="product-price__actual">
                    <div class="product-price__new">
                      4000 $
                    </div>
                    <div class="product-price__quantity">
                      за 1 шт
                    </div>
                  </div>
                </div>
                <object>
                  <a data-toggle="modal" data-target="#button-tovar-v-korzine" class="in-cart">
                    В корзину
                  </a>
                </object>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php' ?>
