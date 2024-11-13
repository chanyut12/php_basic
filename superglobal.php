<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Superglobals
    //$SERVER is a PHP superglobal variable which holds information about headers, paths, and script locations.

    //$_SERVER['PHP_SELF'] is a superglobal variable that returns the filename of the currently executing script.
    echo $_SERVER['PHP_SELF'] . "<br>";
    echo "<br>";
    //$_SERVER['SERVER_NAME'] is a superglobal variable that returns the name of the host server.
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo "<br>";
    //$_SERVER['HTTP_HOST'] is a superglobal variable that returns the host header from the current request.
    echo $_SERVER['HTTP_HOST'] . "<br>";
    echo "<br>";


    //$_REQUEST is a PHP superglobal variable which is used to collect data after submitting an HTML form.
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
    }
    ?>
</body>
</html>