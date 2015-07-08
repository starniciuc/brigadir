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
                    <li class="active">Оформление заказа</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h1 class="title">Оформление заказа</h1>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-panel">
                            <div class="head-panel text-center">
                                Оформление заказа
                            </div>
                            <div class="content-panel">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5 text-right">
                                            <label>Ф.И.О.</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text">                                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5 text-right">
                                            <label>Адрес почтовый</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text">                                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5 text-right">
                                            <label>Ваш еmail</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text">                                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5 text-right">
                                            <label>Ваш телефон</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text">                                                   
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-5 text-right">
                                            <label>Комментарий к заказу</label>
                                        </div>
                                        <div class="col-md-4">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="block-panel">
                            <div class="head-panel text-center">
                                выбор способа оплаты
                            </div>
                            <div class="content-panel">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-check">
                                            <input type="radio" name="c1" id="c1">
                                            <label for="c1">Расчет в магазине</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-check">
                                            <input type="radio" name="c2" id="c2">
                                            <label for="c2">Расчет при доставке (только наличный расчет)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="form-check">
                                            <input type="radio" name="c3" id="c3">
                                            <label for="c3">Безналичный расчет (выставление счета)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="block-panel">
                            <div class="head-panel text-center">
                                варианты способа доставки
                            </div>
                            <div class="content-panel">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-check">
                                            <input type="radio" name="r1" id="r1">
                                            <label for="r1">Самовывоз</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-check">
                                            <input type="radio" name="r2" id="r2">
                                            <label for="r2">Доставка (500 рублей)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-check">
                                            <input type="radio" name="r3" id="r3">
                                            <label for="r3">Доставка за наш счет</label>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-right"><a href="#" class="terms-link">Условия доставки</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-order clearfix">
                    <button class="btn btn-red pull-right">Оформить заказ</button>
                    <button class="btn btn-pers pull-right">Зарегистрироваться и оформить</button>
                    <h1 class="price pull-right">ИТОГО: <span>2900</span> руб.-</h1>
                </div>
            </div>
        </div>
    </div>
</main>
<!--Main section end-->

<!--Footer section start-->
<?php require_once("partials/footer.php"); ?>
