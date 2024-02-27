<?php
namespace Classes\Controller;
class ServiceController{
    public static function Main(){
        $services = \Classes\Model\ServiceModel::GetServices();
        \Classes\View\ServiceView::ShowServiceList($services);
    }
}