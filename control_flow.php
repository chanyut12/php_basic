<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // While loop
    echo "While Loop:<br>";
    $count = 1;
    while ($count <= 5) {
        echo "Count: $count<br>";
        $count++;
    }

    echo "<br>";

    // Do-while loop
    echo "Do-While Loop:<br>";
    $count = 1;
    do {
        echo "Count: $count<br>";
        $count++;
    } while ($count <= 5);

    echo "<br>";

    // For loop
    echo "For Loop:<br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }

    echo "<br>";

    // Foreach loop with array
    echo "Foreach Loop:<br>";
    $colors = ["Red", "Green", "Blue"];
    foreach ($colors as $color) {
        echo "Color: $color<br>";
    }

    echo "<br>";

    // Break and Continue example
    echo "Break and Continue Example:<br>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 3 == 0) {
            continue; // Skip numbers divisible by 3
        }
        if ($i == 8) {
            break; // Stop the loop when 8 is reached
        }
        echo "Number: $i<br>";
    }

    ?>

</body>

</html>