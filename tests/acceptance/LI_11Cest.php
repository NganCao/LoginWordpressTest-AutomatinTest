<?php
use Step\Acceptance\Admin as AdminTester;

class LI_11Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym@gmail.com', '');
        $I->see('pass empty'); // show mess thông báo
    }
}
