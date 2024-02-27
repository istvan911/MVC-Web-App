<?php
require_once 'classes/autoloader.php';
use Classes\Page;
use Classes\Req;
use Classes\Controller;
Page::ShowBegin();

$page = Req::GetPage();
switch($page){  
    case 'szolgaltatasaink': Controller\ServiceController::Main();break;
    case 'termekeink': Controller\ProductController::Main();break;
    case 'bemutatkozas': Controller\IntroductionController::Main();break;
    case 'tortenetunk': Controller\HistoryController::Main();break;
}

Page::ShowEnd();
?>

