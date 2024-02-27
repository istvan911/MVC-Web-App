<?php
namespace Classes\Model;
class HistoryModel{
    public static function GetHistory(){
        return Db::Select('history')[0];
    }
}       