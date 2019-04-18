<?php
use Step\Acceptance\ChangeEmail as ChangeEmailTester;

class LI_17Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ChangeEmailTester $I, $scenario)
    {
        $I = new ChangeEmailTester($scenario);
        $I->ChangeEmailA('caothikimngan97.ym@gmail.com', '12#>ming');
    }
}
