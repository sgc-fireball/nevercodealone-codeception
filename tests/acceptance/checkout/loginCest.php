<?php

namespace checkout;

use \AcceptanceTester;

class loginCest
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
        $I->amOnPage('/login/');
        $I->cantSeeElement('.z-field_error');
        $I->moveMouseOver('#login');
        $I->click('#login');
        $I->canSeeElement('.z-field_error');
    }

}
