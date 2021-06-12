<?php

namespace Models;

use Facades\DB;
use PDO;

class Comment{

    private static $TABLE = "comments";
    private static $TABLE2 = "posts";

    public static function getCommentsByPostId($id){
        $TABLE= self::$TABLE;
        $TABLE2= self::$TABLE2;
        $result = DB::query("SELECT $TABLE.* FROM $TABLE INNER JOIN $TABLE2 ON $TABLE2.id=$TABLE.post_id WHERE $TABLE.post_id=$id;");
        $result=$result->fetchAll(PDO::FETCH_CLASS, self::class);
        return $result;
    }

    public static function create($id, $author, $content){
        $sql = DB::prepare("INSERT INTO ".self::$TABLE." (author, content, post_id) VALUES (:author, :content, :post_id);");
        $sql->execute([':author' => $author, ':content' => $content, ':post_id' => $id]);
    }

    public static function getCommentById($id){
        $sql = DB::prepare('SELECT * FROM ' . self::$TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);
        $sql->setFetchMode(PDO::FETCH_CLASS, self::class);
        $result = $sql->fetch();
        return $result;
    }
    public static function modify($id, $author, $content){
        $sql = DB::prepare("UPDATE ".self::$TABLE." SET author=:author ,content=:content  WHERE id=:id RETURNING post_id;");
        $sql->bindValue(':author', $author,  PDO::PARAM_STR);
        $sql->bindValue(':content', $content,  PDO::PARAM_STR);
        $sql->bindValue(':id', $id,  PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch();
        return $result[0];
    }
    public static function delete($id){
        $sql = DB::prepare("DELETE FROM ".self::$TABLE." WHERE id=:id RETURNING post_id;");
        $sql->bindValue(':id', $id,  PDO::PARAM_INT);
        $sql->execute();
        $result = $sql->fetch();
        // var_dump($result);
        return $result[0];
    }
}