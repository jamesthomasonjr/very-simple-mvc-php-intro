<?php

namespace Controller;

use Model\Blog\PostRepository;

class BlogController
{
    public function readAll() {
        $posts = (new PostRepository)->getAllBlogPosts();

        $context = [
            "title" => "Blog!",
            "posts" => $posts
        ];
        require_once __DIR__ . "/../View/Blog.php";
    }

    public function create() {
        $success = (new PostRepository)->createBlogPost();

        if (!$success) {
            // Since ErrorController is in the same namespace it doesn't require a use statement
            (new ErrorController)->internalServerError();
        } else {
            $this->readAll();
        }
    }
}

