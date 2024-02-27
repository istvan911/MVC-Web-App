<?php
namespace Classes;
class Page{
    public static function ShowBegin(){
            echo 
            '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Bits & Bolts Számítástechnika</title>
                <link rel="stylesheet" href="res/style.css">
                <script src="https://kit.fontawesome.com/5c8e61db8d.js" crossorigin="anonymous"></script>
            </head>
            <body>
                <div id="navbar">
                    <nav>
                        <a href="index.php"><img src="res/img/logo3.jpg" class="logo"></a>
                        <ul id="sidemenu">
                            <li> <a href="index.php"> Bemutatkozás</a></li>
                            <li> <a href="?page=tortenetunk"> Történetünk</a></li>
                            <li> <a href="?page=szolgaltatasaink"> Szolgáltatásaink</a></li>
                            <li> <a href="?page=termekeink"> Termékeink</a></li>
                        <i class="fa-solid fa-arrow-right" onclick="closemenu()"></i>
                    </ul>
                    <i class="fa-solid fa-bars" onclick="openmenu()"></i>
                    </nav>
                </div>';
    }
    public static function ShowEnd(){
        echo 
        '<div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Kapcsolatfelvétel</h1>
                        <p><i class="fa-solid fa-envelope"></i> bits.bolts.szamtech@gmail.com</p>
                        <p><i class="fa-solid fa-phone"></i>+36 12 345 6789</p>
                        <div class="social-icons">
                            <a href="https://www.instagram.com/iponcomputer/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="https://facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2023 - Bits & Bolts Számítástechnika</p>
        </div>
        <script>
            var sidemenu = document.getElementById("sidemenu");

            function openmenu(){
                sidemenu.style.right = "0";
            }
            function closemenu(){
                sidemenu.style.right = "-200px";
            }
        </script>
        </body>
        </html>';
    }
}