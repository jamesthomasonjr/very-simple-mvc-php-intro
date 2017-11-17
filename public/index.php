<?php

use Controller\IndexController;
use Controller\BlogController;
use Controller\ErrorController;

// Create a function that takes a class name and autoloads the required file
function my_autoload ($className) {
    include(__DIR__ . "/../src/" . $className . ".php");
}

// Register the autoload function
spl_autoload_register("my_autoload");

// This is the entry point to the application
// Usually, a framework handles routing and configuration

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Matches a GET request on the root
if ($method === 'GET' && $uri === "/") {
    (new IndexController)->index();
// Matches a GET request on /blog or /blog/
} else if ($method === 'GET' && preg_match('#^/blog/?$#', $uri)) {
    (new BlogController)->readAll();
// Matches a POST request on /blog or /blog/
} else if ($method === 'POST' && preg_match('#^/blog/?$#', $uri)) {
    (new BlogController)->create();
// Page doesn't exist, so we 404
} else {
    (new ErrorController)->notFound();
}
