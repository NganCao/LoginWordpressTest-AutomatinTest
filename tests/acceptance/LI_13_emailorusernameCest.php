<?php
use Step\Acceptance\Admin as AdminTester;

class LI_13_emailorusernameCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin(' caothikimngan97.ym@gmail.com', '12#>ming');
        $I->see('Email address have space chacracter at the begin'); // show mess thông báo
    }
}
