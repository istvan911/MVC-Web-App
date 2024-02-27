<?php
namespace Classes\View;
class ProductView{
    public static function ShowProductList($products){
        echo 
        '<div id="product">
            <div class="container">
                <h1 class="sub-title">Termékeink</h1>
                <div class="product-list">';
                foreach($products as $product)
                {
                echo 
                        '<div class="product">
                            <img src="'.$product['image'].'">
                            <div class="layer">
                                <h3>'.$product['name'].'</h3>
                                <p>'.$product['detail'].'</p>
                                <p> '.number_format($product['price'], 0, '', ' ').' HUF</p>
                            </div>
                        </div>';
                }             
        echo 
                '</div>
            </div>
        </div>';
    }    
}
