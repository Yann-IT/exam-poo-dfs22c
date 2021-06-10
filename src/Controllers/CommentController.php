<?php

namespace Controllers;

use Core\View;
use Models\Comment;


class CommentController{
    function create($request, $id){
        $body = $request->getBody();
        Comment::create($id, $body['author'], $body['content']);
    }
    function delete($request, $id){
        Comment::delete($id);
    }
    function modify($request, $id){
        $comment = Comment::getCommentById($id);
        new View('Comments/modify', compact("comment"));
    }
    function processModify($request, $id){
        $body = $request->getBody();
        Comment::modify($id, $body['author'], $body['content']);
    }

}