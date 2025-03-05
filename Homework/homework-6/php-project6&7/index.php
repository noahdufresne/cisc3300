<?php
$person = [
    "name" => "Noah",
    "age" => 22,
    "university" => "Fordham University",
    "major" => "Computer Science"
];

foreach ($person as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}

function getPersonInfo(string $key, string $defaultValue = "Not Available"): string
{
    global $person;

    return $person[$key] ?? $defaultValue;
}

echo "<br>";
echo "Major: " . getPersonInfo("major") . "<br>";
echo "City: " . getPersonInfo("city", "New York") . "<br>";
echo "Name: " . getPersonInfo("name") . "<br>";
