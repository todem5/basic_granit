<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


$this->title . 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-catalog">
    <h1><?= Html::encode($this->title) ?></h1>

<?php
echo \yii\widgets\Menu::widget([
    'items' => [
        ['label' => 'Главная', 'url' => ['site/index']],
        ['label' => 'About', 'url' => ['site/about']],
        ['label' => 'Contact', 'url' => ['site/contact']],
    ],
    'activeCssClass'=>'left-menu',
]);
?>
</div>
