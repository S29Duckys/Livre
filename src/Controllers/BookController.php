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
        $bookData = $this->manager->findBookid($book_id);
        $book = $bookData[0] ?? null;

        if (!$book) {
            header("Location: /");
            exit();
        }


        require VIEWS . 'App/readpage.php';
    }
    public function del($book_id)
    {
        $page = $this->manager->delete($book_id);

        header("Location: /");
    }
}
