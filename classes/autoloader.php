<?php
namespace CLasses;
spl_autoload_register(function($class)
{
    $class = strtolower($class);
    $class = str_replace('\\','/',$class);
    require_once $class .'.php';
});