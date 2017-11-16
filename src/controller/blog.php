<?php

class BlogController
{
    public function readAll() {
        require_once dirname(__FILE__) . "/../model/blog/post.php";
        $posts = $blogPostModel->getAllBlogPosts();

        $context = [
            "title" => "Blog!",
            "posts" => $posts
        ];
        require_once dirname(__FILE__) . "/../view/blog.php";
    }

    public function create() {
        require_once dirname(__FILE__) . "/../model/blog/post.php";
        $success = $blogPostModel->createBlogPost();

        if (!$success) {
            require_once dirname(__FILE__) . "/error.php";
            $errorController->internalServerError();
        } else {
            $this->readAll();
        }
    }
}

$blogController = new BlogController();
