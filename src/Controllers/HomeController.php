<?php

namespace livre\Controllers;

use livre\Models\HomeManager;

/** Class HomeController **/
class HomeController
{
    private $manager;

    public function __construct()
    {
        $this->manager = new HomeManager();
    }

    public function index()
    {
        $books = $this->manager->findAll();

        require VIEWS . 'App/homepage.php';
    }
}

