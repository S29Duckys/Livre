<?php

namespace livre\Models;

use livre\Models\CreatBook;

/** Class CreateBookManager **/
class CreateBookManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function createBook($title, $author, $description, $url, $date): bool
    {
        $sql = "INSERT INTO livres (title, author, description, url, date)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $this->bdd->prepare($sql);

        return $stmt->execute([$title, $author, $description, $url, $date]);
    }
}
