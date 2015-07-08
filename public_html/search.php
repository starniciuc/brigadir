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
                <li class="active">Список товаров</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <div class="menu-left">
                <ul class="level-1">
                  <li><a href="#">Инструмент</a></li>
                  <li><a href="#">Лакокрасочные материалы</a></li>
                  <li><a href="#">Напольные покрытия</a></li>
                  <li><a href="#">Сантехника</a></li>
                  <li><a href="#">Электрика</a></li>
                  <li class="active">
                    <a href="#">Строительные смеси</a>
                    <ul class="level-2">
                      <li class='has-sub'>
                        <a href="#">отовые смеси <i class="fa fa-angle-right"></i></a>
                        <ul class="level-3">
                          <li><a href='#'>Акриловая</a></li>
                          <li><a href='#'>Минеральная фактурная</a></li>
                          <li><a href='#'>Силикатная</a></li>
                          <li><a href='#'>Гранитно-мраморные</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Грунтовки, огнебиозащита</a></li>
                      <li class='has-sub'>
                        <a href="#">Декоративные штукатурки <i class="fa fa-angle-right"></i></a>
                        <ul class="level-3">
                          <li><a href='#'>Акриловая</a></li>
                          <li><a href='#'>Минеральная фактурная</a></li>
                          <li><a href='#'>Силикатная</a></li>
                          <li><a href='#'>Гранитно-мраморные</a></li>
                        </ul>
                      </li>
                      <li class='has-sub'>
                        <a href="#">Клеевые составы <i class="fa fa-angle-right"></i></a>
                        <ul class="level-3">
                          <li><a href='#'>Акриловая</a></li>
                          <li><a href='#'>Минеральная фактурная</a></li>
                          <li><a href='#'>Силикатная</a></li>
                          <li><a href='#'>Гранитно-мраморные</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Добавки, пластификаторы</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Наливные полы</a></li>
                  <li><a href="#">Смеси для кладки</a></li>
                  <li><a href="#">Шпаклевки</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-9">
              <h1 class="title">Список товаров</h1>

              <div class="head-order catalog">
                <div class="row">
                  <div class="col-md-3">
                    <span class="vert-middle"></span><span class="text">Выберите тип товара: </span>
                  </div>
                  <div class="col-md-2 all-side">
                    <div class="form-check">
                      <input type="radio" name="star" id="r1">
                      <label for="r1"><i class="icon-filter star"></i> Все</label>
                    </div>
                  </div>
                  <div class="col-md-2 day-product">
                    <div class="form-check">
                      <input type="radio" name="star" id="r2">
                      <label for="r2"><i class="icon-filter percent"></i>  Товар дня</label>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-check">
                      <input type="radio" name="star" id="r3">
                      <label for="r3"><i class="icon-filter new"></i>  Новинка</label>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <select class="selectpicker">
                      <option>Сортировать</option>
                      <option>Сначала дорогие</option>
                      <option>Сначала дешевые</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="item-order catalog-mode">
                <div class="row">
                  <div class="col-md-3">
                     <div class="image-produs">
                      <img src="img/produs1.png" alt="produs">
                      <i class="icon promo"></i>
                      <div class="preview">
                        <img src="img/produs1.png" alt="produs">
                        <button class="btn btn-delete" type='button'>x</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                    <p class="price">Цена: <span class="old-price">600 <span class="small-text">руб.-</span></span> <span class="new-price">580 <span class="small-text">руб.-</span></span></p>
                  </div>
                  <div class="col-md-2 text-center">
                     <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </div>
                  <div class="col-md-3 button-side">
                    <button class="btn btn-red pull-right">В корзину</button>
                    <button class="btn btn-pers open-order pull-right">Применение</button>
                  </div>
                </div>
                <div class="collapse">
                  <div class="inner-collapse">

                    <ul class="menu-category in-catalog">
                      <li><a href="#">Кафель</a></li>
                      <li><a href="#">Затирка цветная </a></li>
                      <li><a href="#">Затирка влагоустойчивая</a></li>
                    </ul>

                    <p>Белая акриловая краска для наружных и внутрених работ по минеральным основаниям - бетон, силикатный кирпич, зашпаклёванные, оштукатуренные и др. пористые поверхности. </p>
                  </div>
                </div>
              </div>
              <div class="item-order catalog-mode">
                <div class="row">
                  <div class="col-md-3">
                     <div class="image-produs">
                      <img src="img/produs2.png" alt="produs">
                      <i class="icon promo"></i>
                      <div class="preview">
                        <img src="img/produs2.png" alt="produs">
                        <button class="btn btn-delete" type='button'>x</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                    <p class="price">Цена: <span class="old-price">600 <span class="small-text">руб.-</span></span> <span class="new-price">580 <span class="small-text">руб.-</span></span></p>
                  </div>
                  <div class="col-md-2 text-center">
                     <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </div>
                  <div class="col-md-3 button-side">
                    <button class="btn btn-red pull-right">В корзину</button>
                    <button class="btn btn-pers open-order pull-right">Применение</button>
                  </div>
                </div>
                <div class="collapse">
                  <div class="inner-collapse">

                    <ul class="menu-category in-catalog">
                      <li><a href="#">Кафель</a></li>
                      <li><a href="#">Затирка цветная </a></li>
                      <li><a href="#">Затирка влагоустойчивая</a></li>
                    </ul>

                    <p>Белая акриловая краска для наружных и внутрених работ по минеральным основаниям - бетон, силикатный кирпич, зашпаклёванные, оштукатуренные и др. пористые поверхности. </p>
                  </div>
                </div>
              </div>
              <div class="item-order catalog-mode">
                <div class="row">
                  <div class="col-md-3">
                     <div class="image-produs">
                      <img src="img/produs3.png" alt="produs">
                      <i class="icon new"></i>
                      <div class="preview">
                        <img src="img/produs3.png" alt="produs">
                        <button class="btn btn-delete" type='button'>x</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                    <p class="price">Цена: <span class="old-price">600 <span class="small-text">руб.-</span></span> <span class="new-price">580 <span class="small-text">руб.-</span></span></p>
                  </div>
                  <div class="col-md-2 text-center">
                     <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </div>
                  <div class="col-md-3 button-side">
                    <button class="btn btn-red pull-right">В корзину</button>
                    <button class="btn btn-pers open-order pull-right">Применение</button>
                  </div>
                </div>
                <div class="collapse">
                  <div class="inner-collapse">

                    <ul class="menu-category in-catalog">
                      <li><a href="#">Кафель</a></li>
                      <li><a href="#">Затирка цветная </a></li>
                      <li><a href="#">Затирка влагоустойчивая</a></li>
                    </ul>

                    <p>Белая акриловая краска для наружных и внутрених работ по минеральным основаниям - бетон, силикатный кирпич, зашпаклёванные, оштукатуренные и др. пористые поверхности. </p>
                  </div>
                </div>
              </div>
              <div class="item-order catalog-mode">
                <div class="row">
                  <div class="col-md-3">
                     <div class="image-produs">
                      <img src="img/produs4.png" alt="produs">
                      <i class="icon promo"></i>
                      <div class="preview">
                        <img src="img/produs4.png" alt="produs">
                        <button class="btn btn-delete" type='button'>x</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                    <p class="price">Цена: <span class="old-price">600 <span class="small-text">руб.-</span></span> <span class="new-price">580 <span class="small-text">руб.-</span></span></p>
                  </div>
                  <div class="col-md-2 text-center">
                     <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </div>
                  <div class="col-md-3 button-side">
                    <button class="btn btn-red pull-right">В корзину</button>
                    <button class="btn btn-pers open-order pull-right">Применение</button>
                  </div>
                </div>
                <div class="collapse">
                  <div class="inner-collapse">

                    <ul class="menu-category in-catalog">
                      <li><a href="#">Кафель</a></li>
                      <li><a href="#">Затирка цветная </a></li>
                      <li><a href="#">Затирка влагоустойчивая</a></li>
                    </ul>

                    <p>Белая акриловая краска для наружных и внутрених работ по минеральным основаниям - бетон, силикатный кирпич, зашпаклёванные, оштукатуренные и др. пористые поверхности. </p>
                  </div>
                </div>
              </div>
              <div class="item-order catalog-mode">
                <div class="row">
                  <div class="col-md-3">
                     <div class="image-produs">
                      <img src="img/produs1.png" alt="produs">
                      <i class="icon promo"></i>
                      <div class="preview">
                        <img src="img/produs1.png" alt="produs">
                        <button class="btn btn-delete" type='button'>x</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                    <p class="price">Цена: <span class="old-price">600 <span class="small-text">руб.-</span></span> <span class="new-price">580 <span class="small-text">руб.-</span></span></p>
                  </div>
                  <div class="col-md-2 text-center">
                     <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </div>
                  <div class="col-md-3 button-side">
                    <button class="btn btn-red pull-right">В корзину</button>
                    <button class="btn btn-pers open-order pull-right">Применение</button>
                  </div>
                </div>
                <div class="collapse">
                  <div class="inner-collapse">

                    <ul class="menu-category in-catalog">
                      <li><a href="#">Кафель</a></li>
                      <li><a href="#">Затирка цветная </a></li>
                      <li><a href="#">Затирка влагоустойчивая</a></li>
                    </ul>

                    <p>Белая акриловая краска для наружных и внутрених работ по минеральным основаниям - бетон, силикатный кирпич, зашпаклёванные, оштукатуренные и др. пористые поверхности. </p>
                  </div>
                </div>
              </div>
              <div class="item-order catalog-mode">
                <div class="row">
                  <div class="col-md-3">
                     <div class="image-produs">
                      <img src="img/produs1.png" alt="produs">
                      <i class="icon promo"></i>
                      <div class="preview">
                        <img src="img/produs1.png" alt="produs">
                        <button class="btn btn-delete" type='button'>x</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a>
                    <p class="price">Цена: <span class="old-price">600 <span class="small-text">руб.-</span></span> <span class="new-price">580 <span class="small-text">руб.-</span></span></p>
                  </div>
                  <div class="col-md-2 text-center">
                     <div class="counter">
                      <button class="btn-counter left"><i class="fa fa-caret-left"></i></button>
                      <input type="text" value="1">
                      <button class="btn-counter right"><i class="fa fa-caret-right"></i></button>
                    </div>
                  </div>
                  <div class="col-md-3 button-side">
                    <button class="btn btn-red pull-right">В корзину</button>
                    <button class="btn btn-pers open-order pull-right">Применение</button>
                  </div>
                </div>
                <div class="collapse">
                  <div class="inner-collapse">

                    <ul class="menu-category in-catalog">
                      <li><a href="#">Кафель</a></li>
                      <li><a href="#">Затирка цветная </a></li>
                      <li><a href="#">Затирка влагоустойчивая</a></li>
                    </ul>

                    <p>Белая акриловая краска для наружных и внутрених работ по минеральным основаниям - бетон, силикатный кирпич, зашпаклёванные, оштукатуренные и др. пористые поверхности. </p>
                  </div>
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
          <div class="row">
            <div class="col-lg-12">
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
                <p>Главное отличие панели от вагонки — в отсутствии шва при соединении. При монтаже панелей (при условии качественной панели) шов между панелями не заметен ни зрительно, ни на ощупь. Ширина панели может быть от 15 см до 40-50 см. Фактически самая распространённая ширина пластиковых панелей составляет 25 см.</p>
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
