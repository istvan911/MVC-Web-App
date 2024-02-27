<?php
namespace Classes\Model;
class IntroductionModel{
    public static function GetIntro(){
        return Db::Select('intro')[0];
    }
}