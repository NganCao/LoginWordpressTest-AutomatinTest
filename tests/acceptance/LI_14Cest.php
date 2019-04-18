<?php
use Step\Acceptance\Admin as AdminTester;

class LI_14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin(' caothikimngan97.ym@gmail.com', '12ming');
        $I->see('Old pass '); // show mess thông báo
    }
}
