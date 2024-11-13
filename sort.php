<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = array(11,23,1,89,88,102);
    // Sort the array in ascending order
    sort($num);
    echo "Sorted array is: " . print_r($num);
    echo "<br>";

    $result = 32;
    echo ($result > 30) ? "Result Greater than 30" : "Result Less than 30";

    ?>
</body>
</html>