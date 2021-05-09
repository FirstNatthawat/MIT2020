<?php 
class newbookingController{
    public static function index()
    {
        $newbookingList = newbooking::getAll();
        require_once('views/newbooking/index_newbooking.php');
    }
}