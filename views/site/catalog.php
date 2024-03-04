<?php

/** @var yii\web\View $this */




$this->title . 'Каталог';
$this->params['breadcrumbs'][] = $this->title;

?>
<code><?php  __FILE__ ?></code>
<?php
echo Menu::widget([
    'items' => [
        ['label' => 'Главная', 'url' => ['site/index']],
        ['label' => 'О компании', 'url' => ['site/about']],
        ['label' => 'Услуги', 'url' => ['site/services']],
        ['label' => 'Контакты', 'url' => ['site/contacts']],
    ],
    'activeCssClass'=>'active',
    'firstItemCssClass'=>'fist',
    'lastItemCssClass' =>'last',
]);
?>
