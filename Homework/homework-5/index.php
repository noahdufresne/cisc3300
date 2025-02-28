<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['cars'])) {
    $cars = [
        ["id" => "0001", "brand" => "Ferrari", "price" => "$600,000"],
        ["id" => "0002", "brand" => "Ford", "price" => "$50,000"],
        ["id" => "0003", "brand" => "Toyota", "price" => "$40,000"]
    ];
    echo json_encode($cars);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $message = isset($_POST['message']) ? $_POST['message'] : "";

    if ($name && $email && $message) {
        echo json_encode(["message" => "Thank you, $name! Your message has been received."]);
    } else {
        http_response_code(400);
        echo json_encode(["error" => "All fields are required."]);
    }
    exit();
}

http_response_code(404);
echo json_encode(["error" => "Invalid endpoint"]);
exit();
