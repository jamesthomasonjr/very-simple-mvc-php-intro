<?php

// This is the entry point to the application
// Usually, a framework handles routing and configuration

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Matches a GET request on the root
if ($method === 'GET' && $uri === "/") {
    require_once dirname(__FILE__) . "/../src/controller/index.php";
    $indexController->index();
// Matches a GET request on /blog or /blog/
} else if ($method === 'GET' && preg_match('#^/blog/?$#', $uri)) {
    require_once dirname(__FILE__) . "/../src/controller/blog.php";
    $blogController->readAll();
// Matches a POST request on /blog or /blog/
} else if ($method === 'POST' && preg_match('#^/blog/?$#', $uri)) {
    require_once dirname(__FILE__) . "/../src/controller/blog.php";
    $blogController->create();
// Page doesn't exist, so we 404
} else {
    require_once dirname(__FILE__) . "/../src/controller/error.php";
    $errorController->notFound();
}
