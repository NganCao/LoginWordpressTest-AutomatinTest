<?php
use Step\Acceptance\ChangeTypePassButton as ChangeTypePassTester;

class LI_16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(ChangeTypePassTester $I, $scenario)
    {
        $I = new ChangeTypePassTester($scenario);
        $I->changeTypePass('caothikimngan97.ym@gmail.com', '12#>ming');
    }
}
