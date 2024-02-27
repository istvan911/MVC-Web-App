<?php
namespace Classes\Controller;
class ProductController{
    public static function Main(){
        $products = \Classes\Model\ProductModel::GetProducts();
        \Classes\View\ProductView::ShowProductList($products);
    }
}