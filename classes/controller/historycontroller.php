<?php
namespace Classes\Controller;
class HistoryController{
    public static function Main(){
            $history = \Classes\Model\HistoryModel::GetHistory();
            \Classes\View\HistoryView::ShowHistory($history);
    }
}