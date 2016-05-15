<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');

//Menu
$I->see('Публикации');
$I->see('TM Feed');
$I->see('Хабрахабр');
$I->see('Мегамозг');
$I->see('Geektimes');
$I->see('Тостер');
$I->see('Мой круг');
$I->see('Фрилансим');

//Sidebar
$I->click('#navbar .nav_panel a.tab.tab_menu.open');
$I->see('Публикации');
$I->see('Хабы');
$I->see('Компании');
$I->see('Песочница');
$I->see('Q&A');
$I->see('Вакансии');
