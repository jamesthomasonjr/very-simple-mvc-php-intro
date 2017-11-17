<?php

namespace Model\Blog;

class PostRepository
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
