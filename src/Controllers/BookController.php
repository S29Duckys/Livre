<?php

namespace livre\Controllers;

use livre\Models\BookManager;

/** Class BookController **/
class BookController
{
    private $manager;

    public function __construct()
    {
        $this->manager = new BookManager();
    }

    public function index($book_id)
    {
        $page = $this->manager->findBookPage($book_id);
       
        require VIEWS . 'App/readpage.php';

    }
}

