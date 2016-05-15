<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('Публикации');
$I->see('TM Feed');
$I->see('Хабрахабр');
$I->see('Мегамозг');
$I->see('Geektimes');
$I->see('Тостер');
$I->see('Мой круг');
$I->see('Фрилансим');