<?php

namespace Controllers;

use Core\View;
use Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::all();

        new View('Posts/index', compact("posts"));
    }

    public function show($request, $id)
    {
        $post = Post::getById($id);
        // var_dump($post);
        new View('Posts/show', compact("post")); 
    }

    public function createShow($request)
    {
        new View('Posts/create', []);
    }
    public function createPost($request)
    {
        $body = $request->getBody();
        Post::create($body['titre'], $body['texte']);
        // new View('Posts/index', []);
    }
}
