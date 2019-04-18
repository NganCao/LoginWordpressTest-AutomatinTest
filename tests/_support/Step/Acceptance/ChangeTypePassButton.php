<?php
namespace Step\Acceptance;
use Page\Admin as LoginPage;

class ChangeTypePassButton extends \AcceptanceTester
{
    public function changeTypePass($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$ChangePassButton);
        $I->wait(2);
    }

}