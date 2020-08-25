<?php

namespace App\Tests\acceptance;

use App\Tests\AcceptanceTester;
use function PHPUnit\Framework\assertGreaterThanOrEqual;

class LoginCest
{
    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param AcceptanceTester $I
     */
    public function loginFormFillTest(AcceptanceTester $I)
    {
        $I->wantToTest('Логин и выписка');
        $I->retry(4, 400);
        $I->amOnPage('/');
        $I->seeElement('img[alt="Интернет банк - Банк Санкт-Петербург"]');
        $I->seeElement('input[name="username"]');
        $I->seeElement('input[name="password"]');
        $I->seeElement('#login-button');
        $I->click('#login-button');
        $I->waitForElement('#otp-code', 30);
        $I->seeElement('#login-otp-button');
        $I->click('#login-otp-button');
        $I->waitForElement('#accounts-index', 30);
        $I->moveMouseOver( '#accounts-index');
        $I->retrySee('Выписка');
        $I->click('#statement');
        $I->waitForElement('#query-button', 30);
        $I->click('#query-button');
        $rows = $I->grabMultiple('.transaction-row');
        assertGreaterThanOrEqual(2, count($rows));
    }

    /**
     * @param AcceptanceTester $I
     */
    public function blankTest(AcceptanceTester $I)
    {
        print('теcт писать здесь tests/acceptance/LoginCest.php');
    }
}