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

    public function findBookPage($book_id): array
    {
        $sql = "SELECT *
            FROM pages
            WHERE book_id = :book_id
            ORDER BY num_page ASC";

        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['book_id' => $book_id]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function findBookid($id): array
    {
        $sql = "SELECT *
        FROM livres
        WHERE id = :id;
        ";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM pages WHERE book_id = :id";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['id' => $id]);

        $sql = "DELETE FROM livres WHERE id = :id";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
}
