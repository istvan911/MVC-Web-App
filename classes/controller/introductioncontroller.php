<?php
namespace Classes\Controller;
class IntroductionController{
    public static function Main(){
            $intro = \Classes\Model\IntroductionModel::GetIntro();
            \Classes\View\IntroductionView::ShowIntroduction($intro);
    }
}