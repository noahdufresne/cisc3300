<?php
$request = $_SERVER['REQUEST_URI'];

if ($request == "/html") {
    header("Content-Type: text/html");
    echo "
    <!DOCTYPE html>
    <html>
    <head>
        <title>JavaScript Closure & PHP Routing</title>
    </head>
    <body>
        <h1>HTML Page</h1>
        <p>This page includes JavaScript.</p>

        <script>
            function outerFunction(outerVariable) {
                return function innerFunction(innerVariable) {
                    console.log(`Outer: \${outerVariable}, Inner: \${innerVariable}`);
                };
            }
            const closureExample = outerFunction('Parent Scope');
            closureExample('Child Scope'); // Output in Console
        </script>

        <p>Check the browser console for the JavaScript closure output.</p>
    </body>
    </html>
    ";
} elseif ($request == "/json") {
    // Return JSON response
    header("Content-Type: application/json");
    echo json_encode(["message" => "This is the JSON page", "status" => "success"]);
}
