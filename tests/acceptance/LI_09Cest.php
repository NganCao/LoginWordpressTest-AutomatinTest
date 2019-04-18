<?php
use Step\Acceptance\Admin as AdminTester;

class LI_09Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('caothikimngan97.ym@gmail.com', '123');
        $I->see('psss invalid'); // show mess thông báo
    }
}
