<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
//var_dump($this->params);
?>
<div class="site-additional">
    
<h3>Свяжитесь с&nbsp;нами</h3>
    <div class="additional__contacts">
        <div class="additional__wrap">
            
                <div class="additional__item additional-phones">
                    <div>
                        <h4>Оптовый отдел:</h4><h5>Телефоны:</h5>+7&nbsp;913&nbsp;147-72-50<br>+7&nbsp;983&nbsp;523-59-52<h5>Электронная почта:</h5>granitproomsk@yandex.ru<h5>Адрес:</h5>644103, г.&nbsp;Омск, ул.&nbsp;Седова, 55в к.1<h5>Режим работы:</h5>Пн-пт с&nbsp;9.00&nbsp;до&nbsp;17.00<br>Сб-вс выходные
                    </div>
                </div>
                <div class="additional__item additional-emails">
                
                    <div>
                        <h4>Склад:</h4><h5>Адрес:</h5>644103, г.&nbsp;Омск, ул.&nbsp;Седова,55в&nbsp;к.1<h5>Режим работы:</h5>Пн-пт с&nbsp;9.00&nbsp;до&nbsp;17.00<p></p><p>Сб-вс выходные</p>
                    </div>
                </div>
        </div>
    
        <div class="additional__text">
            <div class="map__btn">
                <p class="btn__opt active">Оптовый отдел</p>
                <!-- <p class="btn__scl">Склад</p> -->
            </div>
            <div class="map__desc">
                <div class="map__opt active"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A303267696de7bc2d6955dbdf4523ff6f3a37cc22e43b0defc2aa21e10e9575d7&amp;source=constructor" width="100%" height="357" frameborder="0"></iframe></div>
                <!-- <div class="map__scl"><iframe width="450" height="357" src="https://yandex.ru/map-widget/v1/?um=constructor%3A8c731fb29fc31f928074624b91e5aad20fab97bd53043b918048fb1b23cfe414&amp;source=constructor" frameborder="0"></iframe></div> -->
            </div>
        </div>
    </div>

</div>
