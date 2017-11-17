<?php

namespace Controller;

class IndexController
{
    public function index() {
        $context = [
            "title" => "Welcome!",
            "name" => "World"
        ];
        require_once __DIR__ . "/../View/Index.php";
    }
}
