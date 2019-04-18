<?php
namespace Page;

class Admin
{
    // include url of current page
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $passwordField = '//*[@id="password"]';
    public static $loginButton = 'Log In';
    public static $ContinueButton = 'Continue';

    public static $ChangePassButton = 'svg.gridicons-not-visible';
    public static $ChangeEmail = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[1]/label/a';
    public static $logo ='//*[@id="header"]/a[1]/span/svg[2]';
    public static $tos ='//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a';
    public static $continueWithGG ='Continue with Google';
    public static $Create ='//*[@id="primary"]/div/main/div/div[2]/a[1]';
    public static $SendEmail ='//*[@id="primary"]/div/main/div/div[2]/a[2]';
    public static $LossYourPass ='//*[@id="primary"]/div/main/div/div[2]/a[3]';
    public static $Back ='//*[@id="primary"]/div/main/div/div[2]/a[4]';
    public static $Translate ='//*[@id="primary"]/div/main/div/div[3]/div/a';
    public static $Signup ='//*[@id="header"]/div/a/span';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
