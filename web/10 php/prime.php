<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    function isPrime($num)
    {
        if ($num <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (is_numeric($number) && $number > 0 && intval($number) == $number) {
        if (isPrime($number)) {
            echo "The number " . $number . " is prime.";
        } else {
            echo "The number " . $number . " is not prime.";
        }
    } else {
        echo "Invalid input. Please enter a positive integer.";
    }
}
?>