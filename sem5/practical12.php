<?php
// 1. Encode PHP array into JSON
$students = [
    ["id" => 1, "name" => "Dipak", "class" => "A"],
    ["id" => 2, "name" => "parth",  "class" => "B"],
    ["id" => 3, "name" => "dhruv", "class" => "A"]
];

// Convert PHP array → JSON
$jsonString = json_encode($students, JSON_PRETTY_PRINT);
echo "<h3>PHP Array Encoded to JSON:</h3>";
echo "<pre>$jsonString</pre>";


// 2. Decode JSON string back to PHP array
$decodedArray = json_decode($jsonString, true); // true = associative array
echo "<h3>JSON Decoded Back to PHP Array:</h3>";
echo "<pre>";
print_r($decodedArray);
echo "</pre>";
?>
