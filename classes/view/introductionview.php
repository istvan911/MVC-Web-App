<?php
namespace Classes\View;
class IntroductionView{
    public static function ShowIntroduction($intro){
        echo 
        '
        <div id="header">
            <div class="container">
                <div class="header-text">
                    <h1>'.$intro['title'].'</h1>
                    <p>'.$intro['paragraf1'].'</p>
                    <p>'.$intro['paragraf2'].'</p>
                </div>
            </div>
        </div>
        ';
    }
}