<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Arithmetic Operations
    echo "Arithmetic Operations:<br>";
    $a = 10;
    $b = 5;
    echo "$a + $b = " . ($a + $b) . "<br>";
    echo "$a - $b = " . ($a - $b) . "<br>";
    echo "$a * $b = " . ($a * $b) . "<br>";
    echo "$a / $b = " . ($a / $b) . "<br>";
    echo "$a % $b = " . ($a % $b) . "<br>";

    echo "<br>";

    // Assignment Operations
    echo "Assignment Operations:<br>";
    $c = 10;
    $c += 5; // Equivalent to $c = $c + 5
    echo "c += 5: $c<br>";
    $c -= 3; // Equivalent to $c = $c - 3
    echo "c -= 3: $c<br>";
    $c *= 2; // Equivalent to $c = $c * 2
    echo "c *= 2: $c<br>";

    echo "<br>";

    // Comparison Operations
    echo "Comparison Operations:<br>";
    $x = 10;
    $y = 15;
    echo "x == y: " . ($x == $y ? 'true' : 'false') . "<br>";
    echo "x != y: " . ($x != $y ? 'true' : 'false') . "<br>";
    echo "x > y: " . ($x > $y ? 'true' : 'false') . "<br>";
    echo "x < y: " . ($x < $y ? 'true' : 'false') . "<br>";

    echo "<br>";

    // Logical Operations
    echo "Logical Operations:<br>";
    $age = 25;
    $is_student = true;
    echo "Age is greater than 18 and is a student: " . (($age > 18 && $is_student) ? 'true' : 'false') . "<br>";
    echo "Age is less than 18 or is a student: " . (($age < 18 || $is_student) ? 'true' : 'false') . "<br>";

    echo "<br>";

    // Conditional Statements
    echo "Conditional Statements:<br>";
    $number = 7;

    if ($number > 0) {
        echo "$number is positive<br>";
    } elseif ($number < 0) {
        echo "$number is negative<br>";
    } else {
        echo "$number is zero<br>";
    }

    echo "<br>";

    // Switch Statement
    echo "Switch Statement:<br>";
    $day = "Wednesday";

    switch ($day) {
        case "Monday":
            echo "Start of the work week!";
            break;
        case "Friday":
            echo "End of the work week!";
            break;
        case "Saturday":
        case "Sunday":
            echo "It's the weekend!";
            break;
        default:
            echo "Midweek days";
    }
    ?>

</body>

</html>