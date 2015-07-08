<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="wrapper">
      <!--Header section start-->
      <?php require_once("partials/header.php"); ?>
      <!--Header section end-->

      <!--Header section start-->
      <?php require_once("partials/menu.php"); ?>
      <!--Header section end-->

      <!--Main section start-->
      <main>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="search-block">
                <input type="text" class="form-control" placeholder="Поиск по сайту...">
                <i class="icons search"></i>
                <button class="btn btn-pers">Найти</button>
              </div>
              <div class="shadow-search"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <ol class="breadcrumb">
                <li><a href="#">Главная </a></li>
                <li class="active">Справочник бригадира</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h1 class="title">Корзина товаров</h1>

              <table class="item-produse">
                <tr>
                  <th></th>
                  <th colspan="2" class="name">Название товара </th>
                  <th>Количество товара </th>
                  <th>Цена единицы товара  (руб.-)</th>
                  <th>Сумма (руб.-)</th>
                  <th></th>
                </tr>
                <tr><td colspan="7" class="divider-tr"></td></tr>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="image-produs">
                      <img src="img/produs1.png" alt="produs">
                      <i class="icon promo"></i>
                    </div>
                  </td>
                  <td class="text-left">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                  </td>
                  <td>
                    <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </td>
                  <td class="price-table">580</td>
                  <td class="price-table">580</td>
                  <td><button class="btn btn-delete">x</button></td>
                </tr>
                <tr><td colspan="7" class="divider-tr"></td></tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="image-produs">
                      <img src="img/produs2.png" alt="produs">
                      <i class="icon new"></i>
                    </div>
                  </td>
                  <td class="text-left">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                  </td>
                  <td>
                    <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="2">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </td>
                  <td class="price-table">580</td>
                  <td class="price-table">1160</td>
                  <td><button class="btn btn-delete">x</button></td>
                </tr>
                <tr><td colspan="7" class="divider-tr"></td></tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="image-produs">
                      <img src="img/produs3.png" alt="produs">
                    </div>
                  </td>
                  <td class="text-left">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                  </td>
                  <td>
                    <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="2">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </td>
                  <td class="price-table">580</td>
                  <td class="price-table">1160</td>
                  <td><button class="btn btn-delete">x</button></td>
                </tr>
                <tr><td colspan="7" class="divider-tr"></td></tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="image-produs">
                      <img src="img/produs4.png" alt="produs">
                    </div>
                  </td>
                  <td class="text-left">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                  </td>
                  <td>
                    <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="2">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </td>
                  <td class="price-table">580</td>
                  <td class="price-table">1160</td>
                  <td><button class="btn btn-delete">x</button></td>
                </tr>
              </table>
              <div class="cart-footer">
                <div class="row">
                  <div class="col-md-6">
                    <h2>Сумма заказа: 2900 руб.-</h2>
                    <h2><span>ИТОГО: <strong>2900</strong> руб.-</span></h2>
                  </div>
                  <div class="col-md-6">
                    <button class="btn btn-red pull-right">Оформить заказ</button>
                    <button class="btn btn-pers pull-right">Сохранить без оформления</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </main>
      <!--Main section end-->

      <div id="my-root-footer"></div>
    </div>

    <!--Footer section start-->
    <?php require_once("partials/footer.php"); ?>

  </body>
</html>
