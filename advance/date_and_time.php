<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Display current time -->
    <?php
    echo "current time: " . date("h:i:sa");
    echo "<br>";
    date_default_timezone_set("Asia/Bangkok");
    echo "<br>";
    echo "Current time in Thailand: " . date("h:i:sa");
    ?>
</body>
</html>