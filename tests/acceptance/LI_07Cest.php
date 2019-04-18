<?php
use Step\Acceptance\Admin as AdminTester;

class LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('http://caothikimngan97.ym@gmail.com', '12#>ming');
        $I->see('404 error'); // show mess thông báo
    }
}
