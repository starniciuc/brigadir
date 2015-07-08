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
            <div class="col-sm-3">
              <div class="menu-left">
                <ul class="level-1">
                  <li><a href="#">Каталог</a></li>
                  <li><a href="#">Мы рекомендуем</a></li>
                  <li><a href="#">Справочник</a></li>
                  <li><a href="#">Доставка и оплата</a></li>
                  <li class="active"><a href="#">О нас</a></li>
                  <li>
                    <a href="#"><i class="fa fa-angle-right"></i> Контакты</a>
                    <ul class="level-2">
                      <li><a href="#">Акриловая</a></li>
                      <li><a href="#">Минеральная фактурная</a></li>
                      <li><a href="#">Силикатная</a></li>
                      <li><a href="#">Гранитно-мраморные</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-sm-9">
              <h1 class="title">Справочник бригадира</h1>

              <div class="select-block">
                <div class="row">
                  <div class="col-lg-12">
                    <h3>Выберите рубрику:</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="inner-list">
                      <span class="selected">Стройматериалы</span>
                      <ul class="open-cat">
                        <li><a href="#">Ссылка на рубрику второго уровня</a></li>
                        <li>
                          <a href="#">Ссылка на рубрику второго уровня</a>
                          <ul class="level-2">
                            <li><a href="#">Ссылка на рубрику третего уровня</a></li>
                            <li><a href="#">Ссылка на рубрику третего уровня</a></li>
                            <li><a href="#">Ссылка на рубрику третего уровня</a></li>
                          </ul>
                        </li>
                        <li><a href="#">Ссылка на рубрику второго уровня</a></li>
                        <li><a href="#">Ссылка на рубрику второго уровня</a></li>
                        <li><a href="#">Ссылка на рубрику второго уровня</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <ul class="list-rubrik">
                      <li><a href="#">Столярные изделия</a></li>
                      <li><a href="#">Электротовары</a></li>
                      <li><a href="#">Инструменты</a></li>
                      <li><a href="#">Напольные покрытия</a></li>
                      <li><a href="#">Плитка</a></li>
                      <li><a href="#">Скобяные изделия</a></li>
                      <li><a href="#">Хранение</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="news-item clearfix">
                <div class="image-block-article">
                  <img src="img/news/1.png" alt="article">
                </div>
                <a href="#">Подготовка поверхности</a>
                <p>Цоколь очистить от грязи, посторонних включений, возможных высолов и промыть водой. Отслаивающаяся старая краска, ломкие слои бетона должны быть удалены. Металлические детали и арматуру, вскрытую... </p>
                <div class="category-list">
                  <span class="info-title">Рубрики <strong>(2)</strong></span>
                  <ul class="list-category">
                    <li><a href="#">Электротовары</a></li>
                    <li><a href="#">Хранение</a></li>
                  </ul>
                </div>
              </div>

              <div class="news-item clearfix">
                <div class="image-block-article">
                  <img src="img/news/2.png" alt="article">
                </div>
                <a href="#">Как сгладить неровности пола с помощью наливного пола</a>
                <p>Цоколь очистить от грязи, посторонних включений, возможных высолов и промыть водой. Отслаивающаяся старая краска, ломкие слои бетона должны быть удалены. Металлические детали и арматуру, вскрытую... </p>

                <div class="category-list">
                  <span class="info-title">Столярные изделия</span>
                </div>
              </div>

              <div class="news-item clearfix">
                <div class="image-block-article">
                  <img src="img/news/3.png" alt="article">
                </div>
                <a href="#">Подготовка поверхности</a>
                <p>Цоколь очистить от грязи, посторонних включений, возможных высолов и промыть водой. Отслаивающаяся старая краска, ломкие слои бетона должны быть удалены. Металлические детали и арматуру, вскрытую... </p>
                <div class="category-list">
                  <span class="info-title">Рубрики <strong>(2)</strong></span>
                  <ul class="list-category">
                    <li><a href="#">Электротовары</a></li>
                    <li><a href="#">Хранение</a></li>
                  </ul>
                </div>
              </div>

              <div class="news-item clearfix">
                <div class="image-block-article">
                  <img src="img/news/4.png" alt="article">
                </div>
                <a href="#">Как сгладить неровности пола с помощью наливного пола</a>
                <p>Цоколь очистить от грязи, посторонних включений, возможных высолов и промыть водой. Отслаивающаяся старая краска, ломкие слои бетона должны быть удалены. Металлические детали и арматуру, вскрытую... </p>
                <div class="category-list">
                  <span class="info-title">Рубрики <strong>(2)</strong></span>
                  <ul class="list-category">
                    <li><a href="#">Электротовары</a></li>
                    <li><a href="#">Хранение</a></li>
                  </ul>
                </div>
              </div>

              <div class="pagination-block">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="fa fa-caret-left"></i></span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="fa fa-caret-right"></i></span>
                    </a>
                  </li>
                </ul>
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
