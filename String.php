<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $text = "hello world";

    echo  "Word : " . $text; //Output: Hello World
    echo "<br><br>";
    echo "String Length : " . strlen($text); //Output: 11
    echo "<br><br>";
    echo  "String UpperCase : " . strtoupper($text); //Output: HELLO WORLD
    echo "<br><br>";
    echo "String LowerCase : " . strtolower($text); //Output: hello world
    echo "<br><br>";
    echo "Word Count : " . str_word_count($text); //Output: 2
    echo "<br><br>";
    echo "Replace World to Chanyut : " . str_replace("World", "Chanyut", $text); //Output: Hello Chanyut

    //String Formatting in PHP
    $name = "Alice";
    echo "Hello, $name!";  // Outputs: Hello, Alice!
    echo "<br><br>";

    //Using sprintf() for Formatting Strings
    $product = "apples";
    $quantity = 5;
    $price = 1.25;

    $formatted = sprintf("You bought %d %s for $%.2f each.", $quantity, $product, $price);
    echo $formatted;  // Outputs: You bought 5 apples for $1.25 each.
    echo "<br><br>";

    //Formatting Numbers
    $number = 1234.567;
    echo number_format($number, 2);  // Outputs: 1,234.57
    echo "<br><br>";

    //ucfirst($string): Capitalizes the first character.
    echo "ucfirst (upper firstword) : " . ucfirst($text);         // Outputs: Hello, world
    echo "<br><br>";

    //ucwords($string): Capitalizes the first letter of each word.
    echo "ucword (upppercase word) : " . ucwords($text);         // Outputs: Hello, World
    echo "<br><br>";

    //strpos($string, "search"): Finds the position of a substring. Returns false if not found.
    echo strpos($text, "world"); //return position of world in text
    echo "<br><br>";

    //substr($string, start, length)
    echo substr($text, 3, 4);  // Outputs: lo w

    //trim($string): Removes whitespace from the beginning and end of a string.
    $text = "   Hello, PHP!   ";
    echo trim($text);              // Outputs: "Hello, PHP!"

    //str_pad($string, length, "padding", STR_PAD_LEFT): Pads a string to a certain length with another string.
    $number = "42";
    echo str_pad($number, 5, "0", STR_PAD_LEFT);  // Outputs: "00042"




    ?>
</body>

</html>