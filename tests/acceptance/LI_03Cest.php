<?php
use Step\Acceptance\Admin as AdminTester;

class LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin(null, '12#>ming');
        $I->see('Email or Username null'); // show mess thông báo
    }
}
