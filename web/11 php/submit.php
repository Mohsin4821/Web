<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    // Storing the information in a text file
    $file = fopen('data.txt', 'a'); // Open the file in append mode
    fwrite($file, $name . "\n"); // Write the name to the file
    fclose($file); // Close the file

    // Displaying the information
    echo "Name: " . $name;
}
?>