<?php
namespace Step\Acceptance;
use Page\Admin as LoginPage;

class ChangeEmail extends \AcceptanceTester
{
    public function ChangeEmailA($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->wait(2);
        $I->click(LoginPage::$ChangeEmail);
        $I->wait(2);
    }
}