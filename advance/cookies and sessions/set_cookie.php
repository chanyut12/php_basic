<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Set a cookie named "user" with the value "Alice" that expires in 30 days
    setcookie("user", "Alice", time() + (86400 * 30), "/"); // 86400 seconds = 1 day
    echo "Cookie 'user' has been set!";
    ?>
    
</body>

</html>