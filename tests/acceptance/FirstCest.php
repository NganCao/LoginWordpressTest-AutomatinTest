<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
//    public function tryToTest(AcceptanceTester $I)
//    {
//    }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
//        $I->see('Home');
        $I->fillField('//*[@id="usernameOrEmail"]', 'caothikimngan97.ym@gmail.com');
        $I->click('Continue'); // hoặc XPath //*[@id="primary"]/div/main/div[2]/div[1]/div/form/div[1]/div[2]/button ||| click vào nút login
        $I->wait(3);

        $I->fillField('//*[@id="password"]', '12#>ming');
        $I->click('Log In');
        $I->wait(3);
        $I->see('Welcome!'); // show mess thông báo
    }
}
