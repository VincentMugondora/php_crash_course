<?php 

// // INDEXED ARRAYS
// $peopleOne = ['vincnet', 'mugo', 'mugondora', 23];
// echo $peopleOne[0];
// echo "<br>";

// $names = array('Vincent', 'Mugo', 'Mugondora');
// // echo $names; // printing array
// echo "<br>";
// echo $names[0]; // accessing array elements
// echo "<br>";
// echo $names[1]; // accessing array elements
// echo "<br>";
// echo $names[2]; // accessing array elements
// echo "<br>";
// echo count($names); // counting array elements

// $ages = [23, 45, 67, 89];
// echo "<br>";
// // print_r ($ages); // accessing array elements
// // $ages[0] = 25; // changing array elements
// // print_r ($ages); // accessing array elements

// // add new element to array
// // $ages[] = 100; // adding new element to array
// // print_r ($ages); // accessing array elements

// array_push($ages, 10); // adding new element to array
// // print_r ($ages); // accessing array elements

// // $peopleThree = array_merge($peopleOne, $peopleTwo); // merging arrays
// // print_r ($peopleThree); // accessing array elements

// // Associative arrays
// $peopleTwo = ['name' => 'Vincent', 'age' => 23, 'email' => 'vincent@example.com'];
// echo "<br>";
// echo $peopleTwo['name']; // accessing array elements
// echo "<br>";

// $peopleThree = [];
// $peopleThree['name'] = 'Vincent'; // adding new element to array
// $peopleThree['age'] = 23; // adding new element to array
// print_r($peopleThree); // accessing array elements


// multi-dimensional array

$blogs = [
    ['title' => 'vin party', 'author' => 'vin', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'vin two', 'author' => 'rashy', 'content' => 'lorem', 'likes' => 40],
    ['title' => 'vin three', 'author' => 'mugo', 'content' => 'lorem', 'likes' => 50],
    ['title' => 'vin four', 'author' => 'mugondora', 'content' => 'lorem', 'likes' => 60],
    ['title' => 'vin five', 'author' => 'mugondora', 'content' => 'lorem', 'likes' => 70],
    ['title' => 'vin six', 'author' => 'mugondora', 'content' => 'lorem', 'likes' => 80],
    ['title' => 'vin seven', 'author' => 'mugondora', 'content' => 'lorem', 'likes' => 90],
    ['title' => 'vin eight', 'author' => 'mugondora', 'content' => 'lorem', 'likes' => 100],
    ['title' => 'vin nine', 'author' => 'mugondora', 'content' => 'lorem', 'likes' => 110],
    ['title' => 'vin ten', 	'author'=>	'mugondora','content'=>'lorem','likes'=>120],
];

// print_r($blogs); // accessing array elements
// echo $blogs[1][0]; // accessing array elements
// echo "<br>";
// print_r($blogs[0]); // accessing array elements
// echo $blogs[0]['title']; // accessing array elements
// echo count($blogs); // counting array elements

$popped = array_pop($blogs); // removing last element from array

print_r($popped); // accessing array elements

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