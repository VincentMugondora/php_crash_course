<?php
// // A simple PHP file demonstrating various functions

// /**
//  * Adds two numbers and returns the result.
//  *
//  * @param float $a First number
//  * @param float $b Second number
//  * @return float The sum of $a and $b
//  */
// function addNumbers($a, $b) {
//     return $a + $b;
// }

// /**
//  * Checks if a number is even.
//  *
//  * @param int $number The number to check
//  * @return bool True if the number is even, false otherwise
//  */
// function isEven($number) {
//     return $number % 2 === 0;
// }

// /**
//  * Converts a string to uppercase.
//  *
//  * @param string $input The string to convert
//  * @return string The uppercase version of the input string
//  */
// function toUpperCase($input) {
//     return strtoupper($input);
// }

// /**
//  * Calculates the factorial of a number.
//  *
//  * @param int $number The number to calculate the factorial for
//  * @return int The factorial of the number
//  */
// function factorial($number) {
//     if ($number <= 1) {
//         return 1;
//     }
//     return $number * factorial($number - 1);
// }

// /**
//  * Prints an array in a readable format.
//  *
//  * @param array $array The array to print
//  * @return void
//  */
// function printArray($array) {
//     echo '<pre>';
//     print_r($array);
//     echo '</pre>';
// }
function sayHello($name = "World") {
    echo "Hello, " . $name . "!";
}

// sayHello("John Doe"); // Outputs: Hello, John Doe!
sayHello(); // Outputs: Hello, World!

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
</body>
</html>