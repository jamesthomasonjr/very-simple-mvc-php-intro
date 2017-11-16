<?php

class BlogPostModel
{
    public function getAllBlogPosts() {
        return [
            "Hello, world!",
            "Introductory blog post"
        ];
    }

    public function createBlogPost() {
        return true;
    }
}

$blogPostModel = new BlogPostModel();
