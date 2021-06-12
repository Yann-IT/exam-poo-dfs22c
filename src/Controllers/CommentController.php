<?php

namespace Controllers;

use Core\View;
use Models\Comment;


class CommentController{
    function create($request, $post_id){
        $body = $request->getBody();
        Comment::create($post_id, $body['author'], $body['content']);
        header("Location: /posts/$post_id");
    }
    function delete($request, $id){
        $post_id = Comment::delete($id);
        // var_dump($post_id);
        header("Location: /posts/$post_id");
    }
    function modify($request, $id){
        $comment = Comment::getCommentById($id);
        new View('Comments/modify', compact("comment"));
    }
    function processModify($request, $id){
        $body = $request->getBody();
        $post_id = Comment::modify($id, $body['author'], $body['content']);
        header("Location: /posts/$post_id");
    }

}