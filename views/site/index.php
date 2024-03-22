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

                <div class="image">
                    <div class="arrow left-arrow">
                        <div class="short"></div>
                        <div class="med"></div>
                        <div class="long"></div>
                    </div>
                    <div class="arrow right-arrow">
                        <div class="short"></div>
                        <div class="med"></div>
                        <div class="long"></div>
                    </div>
                </div>
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