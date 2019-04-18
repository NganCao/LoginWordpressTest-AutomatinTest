<?php
use Step\Acceptance\Admin as AdminTester;

class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('hule@dreamcatcher.email', '12#>ming');
        $I->see('This account has been closed. If you believe your account was closed in error, please contact us.'); // show mess thông báo
    }
}
