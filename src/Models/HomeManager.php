<?php

namespace livre\Models;

use livre\Models\home;

/** Class HomeManager **/
class HomeManager
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

    public function findAll(): array
    {
        $sql = "SELECT * FROM livres";
        $query = $this->bdd->prepare($sql);
        $query->execute();

        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    
}
