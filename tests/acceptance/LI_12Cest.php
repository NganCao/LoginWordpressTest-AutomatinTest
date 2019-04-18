<?php
use Step\Acceptance\Admin as AdminTester;

class LI_12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym@gmail.com', '12#>Ming');
        $I->see('Password have distingguish between uppercase and lowercase'); // show mess thông báo
    }
}
