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
                    <li class="active">Доставка и оплата</li>
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
                <h1 class="title">Доставка и оплата</h1>
                <div class="image-block-article">
                    <img src="img/article.jpg" alt="article">
                </div>
                <p>Пластиковые панели — сравнительно новый материал и используется он во внутренней и реже наружной отделки стен.</p>
                <p>Изготавливается из ПВХ (поливинилхлорида) методом экструзии. Основные типоразмеры:</p>
                <p>Толщина пластиковых панелей 5, 8, 9, 10 мм. По толщине пластиковые панели по сути делятся на два основных размера — 5 и 8-9-10 мм. Размеры от 8 до 10 мм считаются как один размер, так как под них идут молдинги стандартного размера.</p>
                <p>Стандартная длина пластиковых панелей: вагонка (10 см) — 3 м; широкая панель (от 20 до 37 см) — 2,6, 2,7 и 3 м.</p>

                <h1>Название страницы h1</h1>
                <h2>Название страницы h2</h2>
                <h3>Название страницы h3</h3>
                <h4>Название страницы h4</h4>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">выбор способа оплаты</h3>
                        <div class="form-check">
                            <input type="radio" name="r1" id="r1">
                            <label for="r1">Расчет в магазине</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="r1" id="r2">
                            <label for="r2">Расчет при доставке (только наличный расчет)</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="r1" id="r3">
                            <label for="r3">Безналичный расчет (выставление счета)</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="title">выбор способа оплаты</h3>
                        <div class="form-check">
                            <input type="checkbox" name="c1" id="c1">
                            <label for="c1">Расчет в магазине</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="c2" id="c2">
                            <label for="c2">Расчет при доставке (только наличный расчет)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="c1" id="c3">
                            <label for="c3">Безналичный расчет (выставление счета)</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h3 class="title">нумерованый список</h3>
                        <ol class="list">
                            <li>Расчет в магазине</li>
                            <li>Расчет при доставке (только наличный расчет)</li>
                            <li>Безналичный расчет (выставление счета)</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <h3 class="title">не нумерованый список</h3>
                        <ul class="list-ul">
                            <li>Расчет в магазине</li>
                            <li>Расчет при доставке (только наличный расчет)</li>
                            <li>Безналичный расчет (выставление счета)</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <select class="selectpicker">
                            <option>Сортировать</option>
                            <option><a href="#">Сначала дорогие</a></option>
                            <option><a href="#">Сначала дешевые</a></option>
                        </select>
                    </div>
                </div>
                <table class="table-std">
                    <tr>
                        <th></th>
                        <th class="name">Название товара</th>
                        <th>Количество товара</th>
                        <th>Цена единицы</th>
                        <th>Сумма (руб.-)</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td class="name"><a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a></td>
                        <td>1</td>
                        <td>580</td>
                        <td>580</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td class="name"><a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a></td>
                        <td>1</td>
                        <td>580</td>
                        <td>580</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td class="name"><a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a></td>
                        <td>1</td>
                        <td>580</td>
                        <td>580</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td class="name"><a href="#">ФАСАДНЫЕ КРАСКИ - Краска Eskaro Titan Facade Фасадная 1 л</a></td>
                        <td>1</td>
                        <td>580</td>
                        <td>580</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>
<!--Main section end-->

<!--Footer section start-->
<?php require_once("partials/footer.php"); ?>