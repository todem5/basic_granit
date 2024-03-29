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
        <div class="row">
            <h2>Виды гранита: </h2>
            <div class="slider">
                
                    <div class="item">
                        <img src="/img/slider_0.jpg" alt="">
                    </div>
            
            </div>
            <!--
            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="/web/img/slider_0.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="/web/img/slider_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="/web/img/slider_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="/web/img/slider_3.jpg" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button id="prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    <button id="next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div> -->
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
                <div class="p-2 flex-shrink-1">
                    <img src="<?= Yii::$app->request->baseUrl . '/img/base2.png' ?>"  alt="Responsive image">
                </div>
                <div class="p-2 flex-grow-1">

                    <p>С 2002 года компания занимается оптовой поставкой гранитных памятников производства Китая и России.
                        ООО «ГранитПро» предлагает качественный камень по выгодной цене. Приобретая готовые формы, Вы экономите время, </p>
                    <p><a class="btn btn-outline-secondary" href="<?= Yii::$app->urlManager->createUrl(["site/about"]) ?>" class="big-button">Подробнее</a></p>
                </div>

            </div>
        </div>



    </div>