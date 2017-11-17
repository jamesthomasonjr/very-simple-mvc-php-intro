<?php

namespace Controller;

class ErrorController
{
    public function notFound() {
        http_response_code(404);

        $context = [
            "title" => "404!",
            "message" => "404 Not Found"
        ];
        require_once __DIR__ . "/../View/Error.php";
    }

    public function internalServerError() {
        http_response_code(500);

        $context = [
            "title" => "500!",
            "message" => "500 Internal Server Error"
        ];
        require_once __DIR__ . "/../View/Error.php";
    }
}
