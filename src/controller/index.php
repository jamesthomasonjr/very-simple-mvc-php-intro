<?php

class IndexController
{
    public function index() {
        $context = [
            "title" => "Welcome!",
            "name" => "World"
        ];
        require_once dirname(__FILE__) . "/../view/index.php";
    }
}

$indexController = new IndexController();
