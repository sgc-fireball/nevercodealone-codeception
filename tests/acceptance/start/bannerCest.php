<?php

namespace start;

use \AcceptanceTester;

class bannerCest
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
        $I->amOnPage('/');
        $I->seeNumberOfElements('.recos_list > li', [1, 10]);
    }

    public function validatePriceTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $items = $I->grabMultiple('.recos_list > li');
        foreach ($items as $item) {
            $I->assertContains(',95',$item);
            $I->assertNotContains(',85',$item);
        }
    }

}
