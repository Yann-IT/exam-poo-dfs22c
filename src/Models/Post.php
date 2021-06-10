<?php

namespace Models;

use Facades\DB;
use PDO;

class Post{
    const TABLE = "posts";

    public static function all()
    {
        $result = DB::query('SELECT * FROM ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public static function getById($id)
    {
        $sql = DB::prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);
        $sql->setFetchMode(PDO::FETCH_CLASS, self::class);
        $result = $sql->fetch();
        return $result;
    }

    public static function create($titre, $texte){
        $sql = DB::prepare("INSERT INTO ".self::TABLE." (title, content) VALUES (:titre, :texte);");
        $sql->execute([':titre' => $titre, ':texte' => $texte]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    public function modify(){

    }
    public function delete(){

    }
}