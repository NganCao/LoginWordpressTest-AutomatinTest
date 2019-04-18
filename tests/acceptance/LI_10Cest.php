<?php
use Step\Acceptance\Admin as AdminTester;

class LI_10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym@gmail.com', null);
        $I->see('Pass null'); // show mess thông báo
    }
}
