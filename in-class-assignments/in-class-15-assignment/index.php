<?php


require_once __DIR__ . '/Models/Post.php';
require_once __DIR__ . '/Controllers/PostsController.php';

use Controllers\PostsController;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (strpos($requestUri, '/index.php') === 0) {
    $requestUri = str_replace('/index.php', '', $requestUri);
}

if ($requestUri === '/posts' || $requestUri === '/posts/') {
    header('Content-Type: application/json');
    $controller = new \Controllers\PostsController();
    echo $controller->index();
    exit;
}

http_response_code(404);
echo json_encode(["error" => "Not Found"]);
exit;
