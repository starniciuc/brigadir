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
                <li><a href="#">Каталог товаров </a></li>
                <li><a href="#">Лакокрасочные материалы</a></li>
                <li class="active">Краска Eskaro Titan Facade</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="menu-left">
                <ul class="level-1">
                  <li><a href="#">Каталог</a></li>
                  <li><a href="#">Мы рекомендуем</a></li>
                  <li><a href="#">Справочник</a></li>
                  <li><a href="#">Доставка и оплата</a></li>
                  <li><a href="#">О нас</a></li>
                  <li class="active"><a href="#">Контакты</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-9">
              <h1 class="title">Название бригады</h1>
              <div class="view-page">
                <div class="row">
                  <div class="col-lg-10 col-lg-offset-1">
                    <h1>Портфолио</h1>
                    <div class="image-view">
                      <img src="img/slide1.png" alt="slide" id="imageView">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-10 col-lg-offset-1">
                    <ul class="thumbnail-slide">
                      <li class="selected">
                        <img src="img/slide0.png" alt="slide">
                      </li>
                      <li>
                        <img src="img/slide2.png" alt="slide">
                      </li>
                      <li>
                        <img src="img/slide3.png" alt="slide">
                      </li>
                      <li>
                        <img src="img/slide4.png" alt="slide">
                      </li>
                      <li>
                        <img src="img/slide5.png" alt="slide">
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="description-block">
                <div class="row">
                  <div class="col-md-2">
                    <span class="info-title">Специализация</span>
                  </div>
                  <div class="col-sm-5">
                    <p><i class="tool-icon painting"></i> Малярные и штукатурные работы</p>
                    <p><i class="tool-icon trasport"></i> Услуги спецтехники (грузоперевозки, краны, экскаваторы)</p>
                  </div>
                  <div class="col-sm-5">
                    <p><i class="tool-icon doors"></i> Двери, окна (установка)</p>
                    <p><i class="tool-icon placing"></i> Кирпичная кладка</p>
                  </div>
                </div>
              </div>

              <div class="content-text">
                <h2>Панели ПВХ</h2>
                <p>Пластиковые панели — сравнительно новый материал и используется он во внутренней и реже наружной отделки стен.</p>
                <p>Изготавливается из ПВХ (поливинилхлорида) методом экструзии. Основные типоразмеры:</p>
                <p>Толщина пластиковых панелей 5, 8, 9, 10 мм. По толщине пластиковые панели по сути делятся на два основных размера — 5 и 8-9-10 мм. Размеры от 8 до 10 мм считаются как один размер, так как под них идут молдинги стандартного размера.</p>
                <p>Стандартная длина пластиковых панелей: вагонка (10 см) — 3 м; широкая панель (от 20 до 37 см) — 2,6, 2,7 и 3 м.</p>
                <h2>Вагонка</h2>
                <p>Ширина 10 см бывают двух видов — обычная, с широким замком (европейка), и более редкая, с узким замком (полька).</br>
                  Ширина 12,5 см — малораспространённая, панель имеет двойной профиль.<br>
                  Вагонка выпускается в основном белого цвета, гораздо меньше выпускают цветную вагонку, окрашенную в массе в однотонные цвета, такие, как жёлтый, синий, зелёный, коричневый и т. д. 
                </p>
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
