<?php

namespace category;

use \AcceptanceTester;

class filterCest
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
        $I->amOnPage('/damenbekleidung-kleider/');
        list($all,) = explode(' ', $I->grabTextFrom('.numFound'), 2);

        $I->click('//*[@id="js-topFilters"]/div/div[1]/div[1]'); // open
        $I->click('//*[@id="js-topFilters"]/div/div[1]/div[2]/div[2]/ul/li[3]/label'); // select brand
        $I->click('//*[@id="js-topFilters"]/div/div[1]/div[2]/input'); // submit

        list($current,) = explode(' ', $I->grabTextFrom('.numFound'), 2);
        $I->assertLessOrEquals($all, $current);
    }

}
