<?php

/** @var yii\web\View $this */
use Yii;

use yii\helpers\Html;
use yii\db\ActiveRecord;


$this->title . 'Каталог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-catalog">
    <h1><?= Html::encode($this->title) ?></h1>

    <p><a class="btn btn-outline-secondary" href="<?=\yii\helpers\Url::to('@web/pdf/catalogs_v1.pdf');?>" target="_blank"><i class="big-button" aria-hidden="true"></i>Каталог товаров (pdf)</a></p>

</div>