<?php

namespace livre\Controllers;

use livre\Models\CreateBookManager;

/** Class CreateBookController **/
class CreateBookController
{
    private $manager;

    public function __construct()
    {
        $this->manager = new CreateBookManager();
    }

    public function index()
    {
        require VIEWS . 'App/createBook.php';
    }

    public function store()
    {
        $title       = $_POST['titre'] ?? null;
        $author      = $_POST['auteur'] ?? null;
        $description = $_POST['description'] ?? null;
        $url         = $_POST['url'] ?? null;
        $date        = $_POST['date'] ?? null;

        $this->manager->createBook($title, $author, $description, $url, $date);

        header("Location: /");
        exit();
    }
}
