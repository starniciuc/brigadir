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
                    <li class="active">Личный кабинет </li>
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
                <h1 class="title">Личный кабинет</h1>

                <div class="head-order">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="vert-middle"></span><span class="text">Заказ </span>
                        </div>
                        <div class="col-md-2">
                            <span class="vert-middle"></span><span class="text">Сумма заказа (руб.-)</span>
                        </div>
                        <div class="col-md-2">
                            <span class="vert-middle"></span><span class="text">Статус заказа</span>
                        </div>
                        <div class="col-md-2">
                            <span class="vert-middle"></span><span class="text">Наличие счета оплаты </span>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>

                <?php
                    for ($i = 0; $i < 6; $i++) {
                        include 'partials/item-order.php';
                    }
                ?>

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

<!--Footer section start-->
<?php require_once("partials/footer.php"); ?>
