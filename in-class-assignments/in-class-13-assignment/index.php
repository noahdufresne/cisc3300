<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if (isset($_GET['cars']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $cars = [
        ['name' => 'Ferrari'],
        ['name' => 'Ford'],
        ['name' => 'Toyota']
    ];

    echo json_encode($cars);
    exit();
}

// Default response for invalid requests
http_response_code(404);
echo json_encode(["error" => "Invalid endpoint"]);
exit();
