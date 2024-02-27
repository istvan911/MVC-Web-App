<?php
namespace Classes\Model;
class ServiceModel{
    public static function GetServices(){
        return Db::Select('service');
    }
    
}