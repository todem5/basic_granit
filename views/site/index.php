<?php

/** @var yii\web\View $this */
/** @var yii\ */
$this->title = 'ГранитПро';
// echo Breadcrumbs::widget([
// 'homeLink' => ['label' => 'Главная', 'url' => '/'],
//  'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//]) 
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">


    <div class="body-content">
        <div class="row my-carousel">
            <div id="myIndiCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myIndiCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myIndiCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myIndiCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/slider_0.jpg" class="d-block w-1000" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/slider_1.jpg" class="d-block w-1000" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/slider_2.jpg" class="d-block w-1000" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/slider_3.jpg" class="d-block w-1000" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myIndiCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myIndiCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="row">
            <h2>Категории товаров</h2>
            <div class="d-flex flex-row justify-content-center">

                <div class="p-2 flex-grow-1">
                    <p><a class="btn btn-outline-secondary" href="<?= Yii::$app->urlManager->createUrl(["site/catalog"]) ?>" class="big-button">Каталог товаров</a></p>
                </div>

            </div>

            <div>
                <h2>О компании</h2>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <div class="p-2 flex-shrink-1 w-446">
                    <img src="<?= Yii::$app->request->baseUrl . '/img/base1.png' ?>" class="img-fluid" alt="Responsive image">
                </div>
                <div class="p-2 flex-grow-1">

                    <p>С 2002 года компания занимается оптовой поставкой гранитных памятников производства Китая и России.
                        ООО «ГранитПро» предлагает качественный камень по выгодной цене. Приобретая готовые формы, Вы экономите время, </p>
                    <p><a class="btn btn-outline-secondary" href="<?= Yii::$app->urlManager->createUrl(["site/about"]) ?>" class="big-button">Подробнее</a></p>
                </div>

            </div>
        </div>

    </div>

</div>