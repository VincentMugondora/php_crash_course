<?php 

// INDEXED ARRAYS
$peopleOne = ['vincnet', 'mugo', 'mugondora', 23];
echo $peopleOne[0];
echo "<br>";

$names = array('Vincent', 'Mugo', 'Mugondora');
// echo $names; // printing array
echo "<br>";
echo $names[0]; // accessing array elements
echo "<br>";
echo $names[1]; // accessing array elements
echo "<br>";
echo $names[2]; // accessing array elements
echo "<br>";
echo count($names); // counting array elements

$ages = [23, 45, 67, 89];
echo "<br>";
// print_r ($ages); // accessing array elements
// $ages[0] = 25; // changing array elements
// print_r ($ages); // accessing array elements

// add new element to array
// $ages[] = 100; // adding new element to array
// print_r ($ages); // accessing array elements

array_push($ages, 10); // adding new element to array
print_r ($ages); // accessing array elements

// Associative arrays
$peopleTwo = ['name' => 'Vincent', 'age' => 23, 'email' => 'vincent@example.com'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
</body>
</html>