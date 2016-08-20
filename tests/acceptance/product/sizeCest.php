<?php

namespace product;

use \AcceptanceTester;

class sizeCest
{

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/vero-moda-vmlua-t-shirt-basic-snow-white-ve121d0nk-a11.html');
        $I->cantSee('Bitte wähle eine Größe aus.');
        $I->moveMouseOver('#ajaxAddToCartBtn');
        $I->canSee('Bitte wähle eine Größe aus.');
    }
}

