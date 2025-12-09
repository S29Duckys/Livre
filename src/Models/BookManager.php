<?php

namespace livre\Models;

use livre\Models\Book;

/** Class BookManager **/
class BookManager
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

    public function findBookPage($id_livre): array
    {
        $sql = "SELECT *
        FROM pages
        WHERE book_id = :id_livre
        ORDER BY numPage ASC;
        ";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['id_livre' => $id_livre]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete($id_livre)
    {
        $sql = "DELETE FROM pages WHERE book_id = :id_livre";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['id_livre' => $id_livre]);

        $sql = "DELETE FROM livres WHERE id_livre = :id_livre";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['id_livre' => $id_livre]);
    }
}
