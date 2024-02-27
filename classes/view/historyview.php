<?php
namespace Classes\View;
class HistoryView{
    public static function ShowHistory($history){
       echo
        '
        <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="'.$history['image'].'">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">'.$history['title'].'</h1>
                    <p>'.$history['detail'].'</p>
                    <p>'.$history['detail'].'</p>
                    <p>'.$history['detail'].'</p>
                    <p>'.$history['detail'].'</p>
                    <p>'.$history['detail'].'</p>
                </div>
            </div>
        </div>
    </div>
        ';
    }
}