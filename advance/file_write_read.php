<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $filePath = "C:/xampp/htdocs/myproject/advance/example.txt";

    // Writing to a File
    $dataToWrite = "Hello, this is a sample text written to the file.\n";
    $file = fopen($filePath, "w"); // Open the file in write mode
    fwrite($file, $dataToWrite); // Write data to the file
    fclose($file); // Close the file
    echo "Data has been written to the file.<br>";

    // Reading from the File
    if (file_exists($filePath)) {
        $file = fopen($filePath, "r"); // Open the file in read mode
        $fileContent = fread($file, filesize($filePath)); // Read the entire file
        fclose($file); // Close the file
        echo "File content:<br>" . nl2br($fileContent); // Display the file content
    } else {
        echo "File does not exist.";
    }
    ?>

</body>

</html>