<?php

/** @var yii\web\View $this */

$this->title = 'ГранитПро';
?>
<div class="site-index">

    
    <div class="body-content">

        <div class="row">
            <h2>Фотогалерея</h2>
            <div class="bodygrid">
            <div class="slider">
	            <div class="box box-1" style="--img: url(/img/img1.png);" data-text="Одинарный 1"></div>
	            <div class="box box-2" style="--img: url(/img/img2.png);" data-text="Одинарный 2"></div>
	            <div class="box box-3" style="--img: url(/img/img3.png);" data-text="Семейный 1"></div>
	            <div class="box box-4" style="--img: url(/img/img4.png);" data-text="Семейный 4"></div>
	            <div class="box box-5" style="--img: url(/img/img5.png);" data-text="Семейный 5"></div>
            </div>
            </div>
        </div>
        <div class="row">
            <h2>Категории товаров</h2>
            <div class="col-lg-12 mb-10">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div>
            <h2>Преимущества</h2>
            </div>
            <div class="col-lg-12 mb-10">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div>
            <h2>О нас</h2>
            </div>
            <div class="col-lg-4 mb-3">
                <img class="img-responsive" src="<? echo Url::to('@web/img/base1.png')?>"></img>
            </div>
            <div class="col-lg-8 mb-7">

                <p>С 2002 года наша компания занимается оптовой поставкой гранитных памятников производства Китая и России. ООО
                «Аркадо-Гранит Новосибирск» предлагает качественный камень по выгодной цене. Приобретая готовые формы, Вы экономите
                время, сокращаете свои производственные расходы и риски, освобождаетесь от необходимости контроля производственного
                процесса.</p>

                <p><a class="btn btn-info" href="<?= Url::toRoute(['site/contact']) >">О компании &raquo;</a></p>
            </div>
        </div>

    </div>
    
</div>
