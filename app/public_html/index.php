<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <!-- libs css -->
    <link rel="stylesheet" href="/dist/libs/bootstrap/css/bootstrap.min.css">
    <!-- app css -->
    <link rel="stylesheet" href="/dist/css/app.min.css?v=<?= rand(); ?>">
  </head>
  <body data-spy="scroll" data-target="#headerSticky" data-offset="200">
    <header>
        <div class="container header">
            <img class="lazy header-logo" data-src="/dist/resources/images/vigo-logo.svg"/>
            <div class="header-menu">
                <button class="button-primary button-outlined" data-toggle="modal" data-target="#feedbackModal">Связаться с нами</button>
                <button class="button-primary">Войти</button>
            </div>
        </div>
    </header>
    <main>

        <section class="header-sticky">
            <nav id="headerSticky" class="container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#scopeSection" scroll-to>О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#dishesSection" scroll-to>Меню</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#explainSection" scroll-to>Как это работает</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#questionsSection" scroll-to>Частые вопросы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#socialSection" scroll-to>Соцсети</a>
                    </li>
                </ul>
            </nav>
        </section>

        <section class="tagline">
            <img class="lazy tagline-bg-img" data-src="/dist/resources/images/tagline-bg.svg"/>
            <div class="container h-100">
                <div class="row h-100">
                    <div class="tagline-description col-xl-8 col-lg-8 col-md-8 col-12">
                        Привет, это <span class="text-nowrap"><img class="lazy icon icon-inline tagline-icon" data-src="/dist/resources/images/vigo-logo-inline.svg"/>.catering</span><br>
                        Мы позаботимся о вашем питании, а вы -
                        <ul class="anim-add-text d-none">
                            <!-- Set your strings there -->
                            <li>погуляйте с вашей собакой в парке</li>
                            <li>сходите в зал</li>
                            <li>проведите время с семьёй</li>
                            <li>прогуляйтесь в парке</li>
                            <li>примите ванну с морской солью</li>
                            <li>сходите в кинотеатр с друзьями</li>
                            <li>съездите в гости к маме</li>
                            <li>отправляйтесь на шоппинг</li>
                            <li>устройте свидание со своей второй половинкой</li>
                            <li>съездите в автокинотеатр</li>
                            <li>сходите на SPA-процедуры</li>
                            <li>прочтите ваш любимый роман</li>
                            <li>сделайте кормушку с детьми</li>
                            <li>посетите мастер-класс</li>
                            <li>сходите на танцы</li>
                            <li>поиграйте  в приставку</li>
                            <li>поговорите с начальником о повышении</li>
                            <li>сходите в бар с друзьями</li>
                            <li>продлите свой утренний сон</li>
                            <li>посмотрите любимый сериал</li>
                            <li>сыграйте в монополию</li>
                            <li>начните учить новый язык</li>
                            <li>устройте выходной от ежедневной готовки</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="scope" id="scopeSection">
            <div class="container">
                <div class="row">
                    <div class="scope-ad std-text col-xl-4 col-lg-4 col-md-4 col-12">
                        <img class="lazy scope-img" data-src="/dist/resources/icons/scope-order.svg"><br>
                        Заказать сейчас, а заплатить потом
                    </div>
                    <div class="scope-ad std-text col-xl-4 col-lg-4 col-md-4 col-12">
                        <img class="lazy scope-img" data-src="/dist/resources/icons/scope-access.svg"><br>
                        Доступ к сервису в любое время со всех устройств
                    </div>
                    <div class="scope-ad std-text col-xl-4 col-lg-4 col-md-4 col-12">
                        <img class="lazy scope-img" data-src="/dist/resources/icons/scope-list.svg"><br>
                        Комплексное решение по питанию сотрудников
                    </div>
                </div>
            </div>
        </section>

        <section class="dishes" id="dishesSection">
            <img class="lazy dishes-bg-img-1" data-src="/dist/resources/images/dishes-bg-1.svg"/>
            <img class="lazy dishes-bg-img-2" data-src="/dist/resources/images/dishes-bg-2.svg"/>
            <div class="section-title text-center mb-5">Меню</div>
            <nav class="select-tabs-wrapper mb-5">
                <div class="nav select-tabs" id="selectPlanTabs" role="tablist">
                    <div class="highlighter"></div>
                    <a class="active" id="litePlanTab" href="#litePlanPane" data-toggle="tab" role="tab" aria-controls="litePlanPane" aria-selected="true">Лайт</a>
                    <a class="" id="standartPlanTab" href="#standartPlanPane" data-toggle="tab" role="tab" aria-controls="standartPlanPane" aria-selected="false">Стандарт</a>
                    <a class="" id="premiumPlanTab" href="#premiumPlanPane" data-toggle="tab" role="tab" aria-controls="premiumPlanPane" aria-selected="false">Премиум</a>
                    <a class="" id="luxPlanTab" href="#luxPlanPane" data-toggle="tab" role="tab" aria-controls="luxPlanPane" aria-selected="false">Люкс</a>
                </div>
            </nav>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="litePlanPane" role="tabpanel" aria-labelledby="litePlanTab">
                    <div class="std-text text-center mb-5">Описание лайт пакета</div>
                    <div class="std-text-bold text-center mb-5">Пример меню на день</div>

                    <nav class="overflow-auto text-center mb-5">
                        <div class="dishes-type-tabs nav" role="tablist">
                            <a class="active" id="liteSaladsTab" href="#liteSaladsPane" data-toggle="tab" role="tab" aria-controls="liteSaladsPane" aria-selected="true">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/salad.svg"/>
                                Салаты
                            </a>
                            <a class="" id="liteFirstDishTab" href="#liteFirstDishPane" data-toggle="tab" role="tab" aria-controls="liteFirstDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/soup.svg"/>
                                Первое
                            </a>
                            <a class="" id="liteSecondDishTab" href="#liteSecondDishPane" data-toggle="tab" role="tab" aria-controls="liteSecondDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/meat.svg"/>
                                Второе
                            </a>
                            <a class="" id="liteDesertsTab" href="#liteDesertsPane" data-toggle="tab" role="tab" aria-controls="liteDesertsPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/cake.svg"/>
                                Десерты
                            </a>
                            <a class="" id="liteSnacksTab" href="#liteSnacksPane" data-toggle="tab" role="tab" aria-controls="liteSnacksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/pizza.svg"/>
                                Закуски
                            </a>
                            <a class="" id="liteDrinksTab" href="#liteDrinksPane" data-toggle="tab" role="tab" aria-controls="liteDrinksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/beer.svg"/>
                                Напитки
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content container">
                        <div class="tab-pane fade" id="liteFirstDishPane" role="tabpanel" aria-labelledby="liteFirstDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_1.png"></div>
                                        </div>
                                        <div class="grey-text">80 гр / 75 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Гороховый суп с копченостями</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежный гороховый суп с беконом и копчёной грудинкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_2.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 75 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Картофельный крем-суп</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Крем-суп из овощей</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_3.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 586 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Суп гуляш из свинины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Густой суп из свинины с овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_4.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 115 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Борщ</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Традицонный борщ с курицей и сметаной</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="liteSecondDishPane" role="tabpanel" aria-labelledby="liteSecondDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_1.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 203 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Паста с куриной грудкой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Медово-горчичная куриная грудка со спагетти в базиликовом соусе</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_2.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 297 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Тефтели с овощной капонатой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Рыбные тефтели из кефали с тушеными овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_3.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 220 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Куриное филе с рисом</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Сочное куриное филе тушёное в морковном соусе с белым рисом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_4.png"></div>
                                        </div>
                                        <div class="grey-text">200 гр / 438 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Бефстроганов с гречкой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Бефстроганов из свинины с шампиньонами и гречкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="liteSnacksPane" role="tabpanel" aria-labelledby="liteSnacksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ржаная булочка</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Булочка с отрубями</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_3.png"></div>
                                        </div>
                                        <div class="grey-text">20 гр / 72 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ореховый соус</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">20 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="liteSaladsPane" role="tabpanel" aria-labelledby="liteSaladsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_1.png"></div>
                                        </div>
                                        <div class="grey-text">80 гр / 75 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат из садовых овощей</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат из пекинской капусты, редиса и сельдерея со сметаной</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_2.png"></div>
                                        </div>
                                        <div class="grey-text">80 гр / 104 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Винегрет</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Классический винегрет из свеклы, горошка, картофеля и морковки с маслом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_3.png"></div>
                                        </div>
                                        <div class="grey-text">80 гр / 110 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Коул-слоу</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат коул-слоу с яблоком и яично-горчичным соусом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_4.png"></div>
                                        </div>
                                        <div class="grey-text">80 гр / 140 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат с фетой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Романо, фета, томаты... что ещё нужно для вкусного салата?</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="liteDesertsPane" role="tabpanel" aria-labelledby="liteDesertsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 134 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творожный мусс с гранолой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Воздушный творожный мусс с йогуртом и мёдом, подаётся с гранолой</div>
                                        <div class="section-title dish-price">75 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Блины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Блины с брусничным джемом</div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_3.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 445 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Маффины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежные маффины с изюмом</div>
                                        <div class="section-title dish-price">70 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_4.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 239 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творог</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Творог с мидальными хлопьями и брусничным джемом</div>
                                        <div class="section-title dish-price">90 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="liteDrinksPane" role="tabpanel" aria-labelledby="liteDrinksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_drink_1.png"></div>
                                        </div>
                                        <div class="grey-text">500 гр / 245 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Клюквенный морс</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="standartPlanPane" role="tabpanel" aria-labelledby="standartPlanTab">
                    <div class="std-text text-center mb-5">Описание стандартного пакета</div>
                    <div class="std-text-bold text-center mb-5">Пример меню на день</div>

                    <nav class="overflow-auto text-center mb-5">
                        <div class="dishes-type-tabs nav" role="tablist">
                            <a class="active" id="standartSaladsTab" href="#standartSaladsPane" data-toggle="tab" role="tab" aria-controls="standartSaladsPane" aria-selected="true">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/salad.svg"/>
                                Салаты
                            </a>
                            <a class="" id="standartFirstDishTab" href="#standartFirstDishPane" data-toggle="tab" role="tab" aria-controls="standartFirstDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/soup.svg"/>
                                Первое
                            </a>
                            <a class="" id="standartSecondDishTab" href="#standartSecondDishPane" data-toggle="tab" role="tab" aria-controls="standartSecondDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/meat.svg"/>
                                Второе
                            </a>
                            <a class="" id="standartDesertsTab" href="#standartDesertsPane" data-toggle="tab" role="tab" aria-controls="standartDesertsPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/cake.svg"/>
                                Десерты
                            </a>
                            <a class="" id="standartSnacksTab" href="#standartSnacksPane" data-toggle="tab" role="tab" aria-controls="standartSnacksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/pizza.svg"/>
                                Закуски
                            </a>
                            <a class="" id="standartDrinksTab" href="#standartDrinksPane" data-toggle="tab" role="tab" aria-controls="standartDrinksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/beer.svg"/>
                                Напитки
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content container">
                        <div class="tab-pane fade" id="standartFirstDishPane" role="tabpanel" aria-labelledby="standartFirstDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_1.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 94 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Гороховый суп с копченостями</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежный гороховый суп с беконом и копчёной грудинкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_2.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 94 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Картофельный крем-суп</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Крем-суп из овощей</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_3.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 733 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Суп гуляш из свинины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Густой суп из свинины с овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_soup_4.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 144 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Борщ</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Традицонный борщ с курицей и сметаной</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="standartSecondDishPane" role="tabpanel" aria-labelledby="standartSecondDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_1.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 254 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Паста с куриной грудкой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Медово-горчичная куриная грудка со спагетти в базиликовом соусе</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_2.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 371 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Тефтели с овощной капонатой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Рыбные тефтели из кефали с тушеными овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_3.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 275 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Куриное филе с рисом</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Сочное куриное филе тушёное в морковном соусе с белым рисом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_first_4.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 547 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Бефстроганов с гречкой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Бефстроганов из свинины с шампиньонами и гречкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="standartSnacksPane" role="tabpanel" aria-labelledby="standartSnacksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ржаная булочка</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Булочка с отрубями</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_3.png"></div>
                                        </div>
                                        <div class="grey-text">20 гр / 72 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ореховый соус</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">20 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="standartSaladsPane" role="tabpanel" aria-labelledby="standartSaladsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_1.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 94 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат из садовых овощей</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат из пекинской капусты, редиса и сельдерея со сметаной</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_2.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 130 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Винегрет</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Классический винегрет из свеклы, горошка, картофеля и морковки с маслом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_3.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 138 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Коул-слоу</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат коул-слоу с яблоком и яично-горчичным соусом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_salad_4.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 140 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат с фетой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Романо, фета, томаты... ...что ещё нужно для вкусного салата?</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="standartDesertsPane" role="tabpanel" aria-labelledby="standartDesertsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 134 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творожный мусс с гранолой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Воздушный творожный мусс с йогуртом и мёдом, подаётся с гранолой</div>
                                        <div class="section-title dish-price">75 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Блины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Блины с брусничным джемом</div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_3.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 445 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Маффины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежные маффины с изюмом</div>
                                        <div class="section-title dish-price">70 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_4.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 239 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творог</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Творог с мидальными хлопьями и брусничным джемом</div>
                                        <div class="section-title dish-price">90 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="standartDrinksPane" role="tabpanel" aria-labelledby="standartDrinksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_drink_1.png"></div>
                                        </div>
                                        <div class="grey-text">500 гр / 245 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Клюквенный морс</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="premiumPlanPane" role="tabpanel" aria-labelledby="premiumPlanTab">
                    <div class="std-text text-center mb-5">Описание премиум пакета</div>
                    <div class="std-text-bold text-center mb-5">Пример меню на день</div>

                    <nav class="overflow-auto text-center mb-5">
                        <div class="dishes-type-tabs nav" role="tablist">
                            <a class="active" id="premiumSaladsTab" href="#premiumSaladsPane" data-toggle="tab" role="tab" aria-controls="premiumSaladsPane" aria-selected="true">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/salad.svg"/>
                                Салаты
                            </a>
                            <a class="" id="premiumFirstDishTab" href="#premiumFirstDishPane" data-toggle="tab" role="tab" aria-controls="premiumFirstDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/soup.svg"/>
                                Первое
                            </a>
                            <a class="" id="premiumSecondDishTab" href="#premiumSecondDishPane" data-toggle="tab" role="tab" aria-controls="premiumSecondDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/meat.svg"/>
                                Второе
                            </a>
                            <a class="" id="premiumDesertsTab" href="#premiumDesertsPane" data-toggle="tab" role="tab" aria-controls="premiumDesertsPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/cake.svg"/>
                                Десерты
                            </a>
                            <a class="" id="premiumSnacksTab" href="#premiumSnacksPane" data-toggle="tab" role="tab" aria-controls="premiumSnacksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/pizza.svg"/>
                                Закуски
                            </a>
                            <a class="" id="premiumDrinksTab" href="#premiumDrinksPane" data-toggle="tab" role="tab" aria-controls="premiumDrinksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/beer.svg"/>
                                Напитки
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content container">
                        <div class="tab-pane fade" id="premiumFirstDishPane" role="tabpanel" aria-labelledby="premiumFirstDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_soup_1.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 78 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Щи</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Щи из свежей капусты</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_soup_2.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 72 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Рыбный суп с фрикаделькой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Рыбный суп с фрикаделькой из минтая и овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_soup_3.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 163 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Тыквенный крем-суп</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Сливочный крем-суп из тыквы</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_soup_4.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 230 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Грибной крем-суп</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Сливочный крем-суп из шампиньонов</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="premiumSecondDishPane" role="tabpanel" aria-labelledby="premiumSecondDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_first_1.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 320 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Тепалия с морковью</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Запечённая тепалия на морковной подушке</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_first_2.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 354 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Индейка с рисом</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Запечённое филе индейки с рисом и горошком</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_first_3.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 329 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Курица с овощами</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Запеченная куриная грудка с овощами на пару</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_first_4.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 310 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Кефаль с рисом</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Запечённая кефаль в морковном соусе с диким рисом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="premiumSnacksPane" role="tabpanel" aria-labelledby="premiumSnacksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ржаная булочка</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Булочка с отрубями</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_3.png"></div>
                                        </div>
                                        <div class="grey-text">20 гр / 72 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ореховый соус</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">20 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="premiumSaladsPane" role="tabpanel" aria-labelledby="premiumSaladsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_salad_1.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 144 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Томат с фасолью</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Томатный салат с кукурузой и красной фасолью</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_salad_2.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 189 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Греческий салат</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Классический греческий салат с сыром фета и лимонной заправкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_salad_3.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 112 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат из свеклы</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат из запеченной свеклы с моцареллой и грецким орехом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/premium_salad_4.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 247 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат с курицей</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Листья романо с куриным филе в соусе из сельди</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="premiumDesertsPane" role="tabpanel" aria-labelledby="premiumDesertsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 134 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творожный мусс с гранолой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Воздушный творожный мусс с йогуртом и мёдом, подаётся с гранолой</div>
                                        <div class="section-title dish-price">75 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Блины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Блины с брусничным джемом</div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_3.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 445 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Маффины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежные маффины с изюмом</div>
                                        <div class="section-title dish-price">70 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_4.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 239 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творог</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Творог с мидальными хлопьями и брусничным джемом</div>
                                        <div class="section-title dish-price">90 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="premiumDrinksPane" role="tabpanel" aria-labelledby="premiumDrinksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_drink_1.png"></div>
                                        </div>
                                        <div class="grey-text">500 гр / 245 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Клюквенный морс</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="luxPlanPane" role="tabpanel" aria-labelledby="luxPlanTab">
                    <div class="std-text text-center mb-5">Описание люкс пакета</div>
                    <div class="std-text-bold text-center mb-5">Пример меню на день</div>

                    <nav class="overflow-auto text-center mb-5">
                        <div class="dishes-type-tabs nav" role="tablist">
                            <a class="active" id="luxSaladsTab" href="#luxSaladsPane" data-toggle="tab" role="tab" aria-controls="luxSaladsPane" aria-selected="true">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/salad.svg"/>
                                Салаты
                            </a>
                            <a class="" id="luxFirstDishTab" href="#luxFirstDishPane" data-toggle="tab" role="tab" aria-controls="luxFirstDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/soup.svg"/>
                                Первое
                            </a>
                            <a class="" id="luxSecondDishTab" href="#luxSecondDishPane" data-toggle="tab" role="tab" aria-controls="luxSecondDishPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/meat.svg"/>
                                Второе
                            </a>
                            <a class="" id="luxSnacksTab" href="#luxSnacksPane" data-toggle="tab" role="tab" aria-controls="luxSnacksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/pizza.svg"/>
                                Закуски
                            </a>
                            <a class="" id="luxDesertsTab" href="#luxDesertsPane" data-toggle="tab" role="tab" aria-controls="luxDesertsPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/cake.svg"/>
                                Десерты
                            </a>
                            <a class="" id="luxDrinksTab" href="#luxDrinksPane" data-toggle="tab" role="tab" aria-controls="luxDrinksPane" aria-selected="false">
                                <img class="lazy icon-inline mx-2" data-src="/dist/resources/icons/beer.svg"/>
                                Напитки
                            </a>
                        </div>
                    </nav>
                    <div class="tab-content container">
                        <div class="tab-pane fade" id="luxFirstDishPane" role="tabpanel" aria-labelledby="luxFirstDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_soup_1.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 105 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Крем-суп со шпинатом</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежный крем-суп из шпината со сливками</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_soup_2.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 316 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Том Ям Пла</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Тайский суп с камбалой и кефалью</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_soup_3.png"></div>
                                        </div>
                                        <div class="grey-text">250 гр / 153 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Борщ</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Традицонный борщ с говядиной и сметаной</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="luxSecondDishPane" role="tabpanel" aria-labelledby="luxSecondDishTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_first_1.png"></div>
                                        </div>
                                        <div class="grey-text">350г / 500 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Голубцы</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Необыкновенные голубцы и баранины и говядины, подается со свежими овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_first_2.png"></div>
                                        </div>
                                        <div class="grey-text">350г / 500 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Индейка с фасолью и грибами</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Диетическое филе индейки со стручковой фасолью и шампиньонами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_first_3.png"></div>
                                        </div>
                                        <div class="grey-text">350г / 500 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Тефтели по-французски с диетическим пюре</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Сочные тефтели из ягненка с нежнейшим пюре из тыквы, картофеля и моркови</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="luxSnacksPane" role="tabpanel" aria-labelledby="luxSnacksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ржаная булочка</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Булочка с отрубями</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">10 ₽</div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_snack_3.png"></div>
                                        </div>
                                        <div class="grey-text">20 гр / 72 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Ореховый соус</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">20 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="luxSaladsPane" role="tabpanel" aria-labelledby="luxSaladsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_salad_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 85 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Мясной салат</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат с курицей, говяжьим ростбифом и свежими овощами с брусничной заправкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_salad_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 162 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Прованский салат</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат со слабосоленой рыбой, орешками и прованской заправкой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_salad_3.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 125 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Салат с ростбифом</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Салат с говяжьим ростбифом, фасолью и свежими овощами</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lux_salad_4.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 152 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Овощные стиксы</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Палочки из свежих овощей с творожным сыром</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="luxDesertsPane" role="tabpanel" aria-labelledby="luxDesertsTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_1.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 134 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творожный мусс с гранолой</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Воздушный творожный мусс с йогуртом и мёдом, подаётся с гранолой</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_2.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 349 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Блины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Блины с брусничным джемом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_3.png"></div>
                                        </div>
                                        <div class="grey-text">100 гр / 445 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Маффины</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Нежные маффины с изюмом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_desert_4.png"></div>
                                        </div>
                                        <div class="grey-text">150 гр / 239 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Творог</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr">Творог с мидальными хлопьями и брусничным джемом</div>
                                        <div class="section-title dish-price"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="luxDrinksPane" role="tabpanel" aria-labelledby="luxDrinksTab">
                            <div class="dish-tab">
                                <div class="row dish-row"> <!-- .dish-card realize irregular 5-columns layout -->
                                    <div class="dish-card">
                                        <div class="ratio-1-1">
                                            <div class="ratio-wrapper lazy icon" data-src="/dist/resources/images/dishes/lite_drink_1.png"></div>
                                        </div>
                                        <div class="grey-text">500 гр / 245 ккал</div>
                                        <div class="std-text-bold dish-name mb-1">Клюквенный морс</div>
                                        <!--<div class="std-text">Описание</div>-->
                                        <div class="grey-text dish-descr"></div>
                                        <div class="section-title dish-price">65 ₽</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="explain" id="explainSection">
            <div class="section-title text-center mb-5">Как это работает</div>
            <nav class="select-tabs-wrapper mb-5">
                <div class="nav select-tabs" id="selectExplainTabs" role="tablist">
                    <div class="highlighter"></div>
                    <a class="active" id="employeeTab" href="#employeePane" data-toggle="tab" role="tab" aria-controls="employeePane" aria-selected="true">Сотрудник</a>
                    <a class="" id="employerPlanTab" href="#employerPane" data-toggle="tab" role="tab" aria-controls="employerPane" aria-selected="false">Работодатель</a>
                </div>
            </nav>
            <div class="tab-content">
                <div class="tab-pane show active" id="employeePane" role="tabpanel" aria-labelledby="employeeTab">
                    <div class="container">
                        <div class="row explain-group">
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="0">1</div>
                                <div class="explain-text std-text w-75">Сообщаете данные для регистрации менеджеру</div>
                            </div>
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="1">2</div>
                                <div class="explain-text std-text w-75">Получаете доступ в личный кабинет</div>
                            </div>
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="2">3</div>
                                <div class="explain-text std-text w-75">Выбираете, что хотите заказать</div>
                            </div>
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="3">4</div>
                                <div class="explain-text std-text w-75">Курьер привозит вам обед</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="employerPane" role="tabpanel" aria-labelledby="employerTab">
                    <div class="container">
                        <div class="row explain-group">
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="0">1</div>
                                <div class="explain-text std-text w-75">Работодатель заключает с нами договор</div>
                            </div>
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="1">2</div>
                                <div class="explain-text std-text w-75">Каждому сотруднику выдается доступ в личный кабинет</div>
                            </div>
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="2">3</div>
                                <div class="explain-text std-text w-75">Сотрудник заказывает блюда с доставкой в офис</div>
                            </div>
                            <div class="explain-elem col-md-3 col-6">
                                <div class="explain-number" data-index="3">4</div>
                                <div class="explain-text std-text w-75">Работодалель отслеживает расходы всех сотрудников</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="questions" id="questionsSection">
            <img class="lazy questions-bg-img-1" data-src="/dist/resources/images/questions-bg-1.svg"/>
            <img class="lazy questions-bg-img-2" data-src="/dist/resources/images/questions-bg-2.svg"/>
            <div class="container">
                <div class="row">
                    <div class="questions-description col-md-4 col-12 text-md-left text-center">
                        <div class="section-title mb-2">Частые вопросы</div>
                        <div class="std-text grey-text mb-4">Если вы не нашли ответ на ваш вопрос, наши менеджеры свяжутся с вами и помогут</div>
                        <button class="button-primary mt-2" data-toggle="modal" data-target="#feedbackModal">Получить консультацию</button>
                    </div>
                    <div id="questionsBlock" class="questions-content col-md-8 col-12">

                        <div class="questions-block">
                            <button id="questionHeading1" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse1" aria-expanded="false" aria-controls="questionCollapse1">
                                <span>Где вы это всё готовите?</span>
                            </button>
                            <div id="questionCollapse1" class="questions-answer std-text collapse" aria-labelledby="questionHeading1" data-parent="#questionsBlock">
                                Все блюда мы готовим на производстве в центре Екатеринбурга, с использованием современного оборудования. Так вы получаете самые вкусные блюда прямо из под ножа.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading2" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse2" aria-expanded="false" aria-controls="questionCollapse2">
                                <span>В чём привозите еду?</span>
                            </button>
                            <div id="questionCollapse2" class="questions-answer std-text collapse" aria-labelledby="questionHeading2" data-parent="#questionsBlock">
                                Каждое блюдо упаковано индивидуально и запаяно специальной пленкой, чтобы увеличить срок хранения.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading3" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse3" aria-expanded="false" aria-controls="questionCollapse3">
                                <span>Сколько хранится еда?</span>
                            </button>
                            <div id="questionCollapse3" class="questions-answer std-text collapse" aria-labelledby="questionHeading3" data-parent="#questionsBlock">
                                Мы готовим еду исключительно из натуральных ингредиентов, поэтому рекомендованное время употребления любого нашего блюда — 72 часа (при сохранности упаковки и хранении в холодильнике).
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading4" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse4" aria-expanded="false" aria-controls="questionCollapse4">
                                <span>Можно ли разогревать блюдо в контейнерах?</span>
                            </button>
                            <div id="questionCollapse4" class="questions-answer std-text collapse" aria-labelledby="questionHeading4" data-parent="#questionsBlock">
                                Да, можно. Мы используем пищевые боксы, которые предназначены для разогрева в СВЧ-печи.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading5" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse5" aria-expanded="false" aria-controls="questionCollapse5">
                                <span>Во сколько привозят еду?</span>
                            </button>
                            <div id="questionCollapse5" class="questions-answer std-text collapse" aria-labelledby="questionHeading5" data-parent="#questionsBlock">
                                Время доставки обговаривается индивидуально. Обычно это с 10:00 до 13:00.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading6" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse6" aria-expanded="false" aria-controls="questionCollapse6">
                                <span>Я могу выбрать, что заказать?</span>
                            </button>
                            <div id="questionCollapse6" class="questions-answer std-text collapse" aria-labelledby="questionHeading6" data-parent="#questionsBlock">
                                Да, конечно. У вас будет выбор из 4 меню. В каждом меню вы также можете выбрать разные блюда.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading7" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse7" aria-expanded="false" aria-controls="questionCollapse7">
                                <span>Как производится заказ?</span>
                            </button>
                            <div id="questionCollapse7" class="questions-answer std-text collapse" aria-labelledby="questionHeading7" data-parent="#questionsBlock">
                                Вам выдается доступ в личный кабинет, в котором вы можете заказывать еду на завтра или неделю вперёд.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading8" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse8" aria-expanded="false" aria-controls="questionCollapse8">
                                <span>Как оплачивать?</span>
                            </button>
                            <div id="questionCollapse8" class="questions-answer std-text collapse" aria-labelledby="questionHeading8" data-parent="#questionsBlock">
                                1) Ваш работодатель заключил с нами договор и вычитает стоимость обедов у вас из зарплаты/компенсирует стоимость обедов.<br>2) Вы оплачиваете заказ самостоятельно при заказе на сайте.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading9" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse9" aria-expanded="false" aria-controls="questionCollapse9">
                                <span>Могу я отслеживать свои расходы?</span>
                            </button>
                            <div id="questionCollapse9" class="questions-answer std-text collapse" aria-labelledby="questionHeading9" data-parent="#questionsBlock">
                                Да, все ваши расходы будут хранится у вас в личном кабинете.
                            </div>
                        </div>

                        <div class="questions-block">
                            <button id="questionHeading10" class="questions-header collapsed nofocus" data-toggle="collapse" data-target="#questionCollapse10" aria-expanded="false" aria-controls="questionCollapse10">
                                <span>Указаны ли где-либо КБЖУ каждого блюда?</span>
                            </button>
                            <div id="questionCollapse10" class="questions-answer std-text collapse" aria-labelledby="questionHeading10" data-parent="#questionsBlock">
                                Да, в личном кабинете в меню указан состав и КБЖУ.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="social" id="socialSection">
            <div class="section-title text-center mb-4">Наши соцсети</div>
            <div class="text-center mb-4">
                <a href="https://vk.com/vigo.catering" target="_blank"><img class="lazy icon-inline social-icon mr-4" data-src="/dist/resources/icons/vk-icon.svg"></a>
                <a href="https://www.instagram.com/vigo.catering/" target="_blank"><img class="lazy icon-inline social-icon" data-src="/dist/resources/icons/instagram-icon.svg"></a>
            </div>
            <div class="overflow-auto">
                <div class="container">
                    <div class="row flex-md-wrap flex-nowrap">
                        <div class="social-block col-lg-4 col-md-6 col-11">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CFq8pAVA6xe/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFq8pAVA6xe/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Посмотреть эту публикацию в Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFq8pAVA6xe/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Публикация от Доставка горячего питания (@vigo.catering)</a> <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-09-28T07:00:26+00:00">28 Сен 2020 в 12:00 PDT</time></p></div></blockquote>
                        </div>
                        <div class="social-block col-lg-4 col-md-6 col-11">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CFjGkjcAD5z/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFjGkjcAD5z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Посмотреть эту публикацию в Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFjGkjcAD5z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Публикация от Доставка горячего питания (@vigo.catering)</a> <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-09-25T05:53:17+00:00">24 Сен 2020 в 10:53 PDT</time></p></div></blockquote>
                        </div>
                        <div class="social-block col-lg-4 col-md-6 col-11">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/CFY86GiA112/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CFY86GiA112/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Посмотреть эту публикацию в Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CFY86GiA112/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Публикация от Доставка горячего питания (@vigo.catering)</a> <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-09-21T07:16:26+00:00">21 Сен 2020 в 12:16 PDT</time></p></div></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="lazy footer-bg" data-src="/dist/resources/images/footer-bg.svg">
                <div class="container footer-container text-lg-left text-md-center text-sm-left text-center">
                    <img class="lazy icon-inline footer-logo mb-5" data-src="/dist/resources/images/vigo-logo-white.svg" alt="">
                    <div class="white-text">Телефон</div>
                    <div class="white-text std-text-bold mb-4">8 (800) 222 96-40</div>
                </div>
            </div>
        </section>

    </main>

    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/">
                    <div class="modal-header border-0">
                        <div class="section-title">Обратная связь</div>
                        <button type="button" class="close section-title" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="grey-text mb-2">
                            Ваше имя
                        </div>
                        <input class="input-text mb-4" type="text" name="" value="">
                        <div class="grey-text mb-2">
                            Электронная почта
                        </div>
                        <input class="input-text mb-4" type="text" name="" value="">
                        <div class="grey-text mb-2">
                            Текст сообщения
                        </div>
                        <textarea class="input-text mb-4"></textarea>
                        <div class="grey-text mb-2 text-center">
                            Или звоните по круглосуточному телефону
                        </div>
                        <div class="big-text-bold grey-text text-center">
                            8 (800) 222 96-40
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="button-primary flex-grow-1">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- libs js -->
    <script src="/dist/libs/jquery/jquery-3.5.1.min.js"></script>
    <script src="/dist/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/dist/libs/lazyload/jquery.lazy.min.js"></script>
    <script src="/dist/libs/lazyload/jquery.lazy.script.min.js"></script>
    <!-- app js -->
    <script src="/dist/js/app.min.js?v=<?= rand(); ?>"></script>
    <!-- instagram js -->
    <script class="lazy" data-src="//www.instagram.com/embed.js"></script>
  </body>
</html>
