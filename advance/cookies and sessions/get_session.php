<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();

    //Check if the session variable "username" is set and display it
    if(isset($_SESSION["username"])) {
        echo "Welcome " . $_SESSION["username"] . "!";
    } else {
        echo "Session 'username' is not set!";
    }
    ?>
</body>
</html>