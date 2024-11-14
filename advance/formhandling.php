<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Handling Form Submission -->  
    <!-- HTML form for user input -->
    <form method="post" action="">
        Enter your name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
    <?php
    // PHP script to handle the form data
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        echo "Hello, $name!";
    }
    ?>
</body>

</html>