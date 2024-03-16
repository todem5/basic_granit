<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Оплата';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-payment">
    <div class="site-payment-title">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <div class="site-payment-describe">
        <p>
        <ul>
            <li> Наличный расчет</li>
            <li> Безналичный расчет</li>
            <li> Банковский перевод</li>
        </ul>
        Покупатель оплачивает полную стоимость товара до момента отгрузки товара. Предоплата осуществляется путем перечисления денежных средств на расчетный счет организации ООО «ГранитПро»
        Банковские реквизиты для оплаты:
        </p>
        <p>
            ОГРН 1245500002274<br>
            ИНН 5507297647<br>
            КПП 550701001<br>
            Банк МОСКОВСКИЙ ФИЛИАЛ АО КБ "МОДУЛЬБАНК"<br>
            БИК 044525092<br>
            К/C 30101810645250000092<br>
            Р/С 40702810670010422632
        </p>
    </div>
    <code><?php // __FILE__ ?></code>
</div>
