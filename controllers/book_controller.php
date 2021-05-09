<?php 
class bookController{
    public static function index()
    {
        $bookList = book::getAll();
        require_once('views/book/index_book.php');
    }
}