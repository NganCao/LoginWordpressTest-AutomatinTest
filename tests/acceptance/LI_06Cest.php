<?php
use Step\Acceptance\Admin as AdminTester;

class LI_06Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('CaoThiKimNgan97.ym@gmail.com', '12#>ming');
//        $I->see('Pass!'); // show mess thông báo
    }
}
