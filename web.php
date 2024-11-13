<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello World <br> ";
    $txt1 = "Chanyut ";
    $txt2 = "Lisawat";
    echo "I love " . $txt1 . $txt2 . "!"; 

    print "<h2>PHP is Fun!</h2>";
    print "<h1>PHP is Fun!</h1>";
    print "Hello world!<br>";

    $value1 = 10;
    $value2 = 20;
    $sum = $value1 + $value2;
    echo "The sum of $value1 and $value2 is: $sum";

    //class in php 
    class Car {
        public $name;
        public $color;
        public function __construct($name , $color) {
            $this->name = $name;
            $this->color = $color;
        }
    }

    $car = new Car("BMW", "Black"); //Object in php

    $var = null;
    ?>
</body>
</html>