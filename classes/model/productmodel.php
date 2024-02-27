<?php
namespace Classes\Model;
class ProductModel{
    public static function GetProducts(){
        return Db::Select('product');
    }  
}
