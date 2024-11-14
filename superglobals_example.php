<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $_SERVER Example
    echo "<h3>Server Information</h3>";
    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";

    echo "<br>";

    // $_GET Example
    echo "<h3>Using \$_GET Superglobal</h3>";
    if (isset($_GET['name'])) {
        echo "Hello, " . htmlspecialchars($_GET['name']) . "!<br>";
    } else {
        echo "No name provided in the URL.<br>";
    }

    echo "<br>";

    // $_POST Example with Form
    echo "<h3>Using \$_POST Superglobal</h3>";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
        echo "Hello, " . htmlspecialchars($_POST['name']) . "!<br>";
    } else {
        echo "No name provided via POST method.<br>";
    }
    ?>

    <br><br>
    <form method="post" action="">
        Enter your name (for method post): <input type="text" name="name">
        <input type="submit">
    </form>
    
    <br><br>

    <form action="" method="get">
        Enter your name (for method get): <input type="text" name="name">
        <input type="submit">
    </form>
    <?php

    // $_SESSION Example
    session_start();
    $_SESSION['username'] = "Alice";
    echo "<h3>Using \$_SESSION Superglobal</h3>";
    echo "Stored Username: " . $_SESSION['username'] . "<br>";

    echo "<br>";

    // $_COOKIE Example
    setcookie("user", "Alice", time() + (86400 * 30), "/"); // Set cookie for 30 days
    echo "<h3>Using \$_COOKIE Superglobal</h3>";
    if (isset($_COOKIE['user'])) {
        echo "Welcome back, " . $_COOKIE['user'] . "<br>";
    } else {
        echo "User cookie is not set.<br>";
    }
    ?>

</body>

</html>