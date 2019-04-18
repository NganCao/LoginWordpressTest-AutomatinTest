<?php
use Step\Acceptance\Admin as AdminTester;

class LI_15Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym@gmail.com', '12#>ming');
        $I->see('If pass change "*" -> pass'); // show mess thông báo
    }
}
