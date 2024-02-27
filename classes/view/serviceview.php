<?php
namespace Classes\View;
class ServiceView{
    public static function ShowServiceList($services){
        echo 
        '<div id="services">
            <div class="container">
                <h1 class="sub-title">Szolgáltatásaink</h1>
                <div class="services-list">';
                foreach($services as $service){
                    echo 
                    '
                    <div>
                        <i class="'.$service['image'].'"></i>
                        <h2>'.$service['name'].'</h2>
                        <p>'.$service['detail'].'</p>
                        <p class="price" >'.number_format($service['price'], 0, '', ' ').' HUF</p>
                        
                    </div>
                    ';
                }
        echo 
        '             
                </div>
            </div>
        </div>';
    }
}