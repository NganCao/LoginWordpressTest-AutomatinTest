<?php
use Step\Acceptance\Admin as AdminTester;

class LI_08Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym@gmail.com', '12#>ming');
//        $I->see('pass!'); // show mess thông báo
    }
}
