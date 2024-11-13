<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Simple function without parameters
function sayHello() {
    echo "Hello, World!<br>";
}
sayHello();

// Function with parameters
function greet($name) {
    echo "Hello, $name!<br>";
}
greet("Alice");
greet("Bob");

// Function with a return value
function multiply($a, $b) {
    return $a * $b;
}
$product = multiply(4, 5);
echo "The product is: $product<br>";

// Function with call by value
function incrementValue($value) {
    $value++;
    echo "Inside function (value): $value<br>";
}
$num = 10;
incrementValue($num);
echo "Outside function (value): $num<br>"; // Original value remains unchanged

// Function with call by reference
function incrementReference(&$value) {
    $value++;
    echo "Inside function (reference): $value<br>";
}
incrementReference($num);
echo "Outside function (reference): $num<br>"; // Original value is modified
?>

</body>
</html>