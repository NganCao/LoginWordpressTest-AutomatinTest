<?php
use Step\Acceptance\Admin as AdminTester;

class LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym', '12#>ming');
        $I->see('Emailorusername invalid'); // show mess thông báo
    }
}
