<?php

/** @var yii\web\View $this */

$this->title . ' - Каталог';
//$this->breadcrumbs = [
//    'Каталог'
//];

$this->menu = [
    [
        'label' => '1 вид',
        'url' => ['terminal/student&form=1'],
        'visible' => true,
    ],
    [
        'label' => '2 вид',
        'url' => ['hostelContract/student'],
        'visible' => true,
    ]
];