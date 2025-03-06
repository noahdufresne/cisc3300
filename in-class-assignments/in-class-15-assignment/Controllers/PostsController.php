<?php

namespace Controllers;

use Models\Post;

class PostsController
{
    public function index()
    {
        $postModel = new Post();
        return json_encode($postModel->getPosts());
    }
}
