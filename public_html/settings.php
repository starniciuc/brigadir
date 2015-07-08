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
                <li class="active">Настройки</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-3">
              <ul class="left-menu">
                <li><a href="#"><i class="fa fa-chevron-right"></i> Все заказы</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i> Перейти в корзину</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i> Настройки</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i> Мои вопросы</a></li>
              </ul>
            </div>
            <div class="col-sm-9">
              <h1 class="title">Настройки</h1>

              <div class="row">
                <div class="col-sm-12">
                  <div class="block-panel">
                    <div class="content-panel">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-5 text-right">
                            <label>Сменить email</label>
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" type="text">                                                   
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-5 text-right">
                            <label>Сменить телефон</label>
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" type="text">                                                   
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-5 text-right">
                            <label>Новый пароль</label>
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" type="text">                                                   
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-5 text-right">
                            <label>Повторите пароль</label>
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" type="text">                                                   
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4 col-md-offset-5">
                            <button class="btn btn-red">Сохранить</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="block-panel">
                    <div class="head-panel text-center">
                      реквизиты компании
                    </div>
                    <div class="content-panel info-block">
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>Название компании</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>Юридический адрес</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>Почтовый адрес</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>Телефон</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>ОГРН</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>ИНН</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>КПП</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>Расчетный счет</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>Банк</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                          <p>К/счет</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-8 col-md-offset-4">
                            <p>БИК</p>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix">
                        <span class="verify not-ver pull-left"><i class='icon not-verify'></i>Компания авторизована</span>
                        <!--<span class="verify pull-left"><i class='icon verify'></i>Компания авторизована</span>-->
                        <div class="footer-order no-padding pull-right">
                          <button class="btn btn-red pull-right">Редактировать реквизиты компании</button>
                          <button class="btn btn-pers pull-right">Ввести реквизиты компании</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="block-panel">
                    <div class="head-panel text-center">
                      Загрузите карточку предприятия
                    </div>
                    <div class="content-panel">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 text-right">
                            <label>Название компании</label>
                          </div>
                          <div class="col-md-4">
                            <input class="form-control" type="text">                                                   
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6 text-right">
                            <label>Загрузите карточку предприятия</label>
                          </div>
                          <div class="col-md-4">
                            <div class="input-side input-file">
                              <span class="nameFile"></span>
                              <input class="form-control uploadInp" type="file">  
                              <button class="btn btn-pers">Выбрать</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-4 col-md-offset-5">
                            <button class="btn btn-red">Сохранить</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
