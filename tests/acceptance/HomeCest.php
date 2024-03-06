<?php

use yii\helpers\Url;

class HomeCest
{
    public function ensureThatHomePageWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/index'));        
        $I->see('ООО "ГранитПро"');
        
        $I->seeLink('О компании');
        $I->click('О компании');
        $I->wait(2); // wait for page to be opened
        
        $I->see('This is the About page.');
    }
}
