<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the entered credentials
    $credentialsFile = "credentials.txt";
    $validCredentials = false;
    if (file_exists($credentialsFile)) {
        $credentials = file($credentialsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($credentials as $credential) {
            [$storedUsername, $storedPassword] = explode(",", $credential);
            if ($username == $storedUsername && $password == $storedPassword) {
                $validCredentials = true;
                break;
            }
        }
    }

    if ($validCredentials) {
        echo "Login successful!";
        // Perform further actions or redirect to a different page
    } else {
        echo "Invalid username or password!";
    }
}
?>