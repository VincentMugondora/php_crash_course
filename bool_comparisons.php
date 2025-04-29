<?php
// Boolean Comparisons in PHP

// Equal (==): Checks if values are equal
$a = 5;
$b = "5";
var_dump($a == $b); // true, because values are equal (type is not checked)

// Identical (===): Checks if values and types are equal
var_dump($a === $b); // false, because types are different (integer vs string)

// Not Equal (!=): Checks if values are not equal
$c = 10;
$d = 20;
var_dump($c != $d); // true, because values are not equal

// Not Identical (!==): Checks if values or types are not equal
var_dump($a !== $b); // true, because types are different

// Greater Than (>): Checks if the left value is greater than the right value
var_dump($c > $d); // false, because 10 is not greater than 20

// Less Than (<): Checks if the left value is less than the right value
var_dump($c < $d); // true, because 10 is less than 20

// Greater Than or Equal To (>=): Checks if the left value is greater than or equal to the right value
var_dump($c >= 10); // true, because 10 is equal to 10

// Less Than or Equal To (<=): Checks if the left value is less than or equal to the right value
var_dump($d <= 20); // true, because 20 is equal to 20

// Spaceship Operator (<=>): Returns -1, 0, or 1 when left is less than, equal to, or greater than right
var_dump($c <=> $d); // -1, because 10 is less than 20
var_dump($d <=> $c); // 1, because 20 is greater than 10
var_dump($c <=> 10); // 0, because 10 is equal to 10
?>