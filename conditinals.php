<?php

// Conditional statements in PHP
// if, else, elseif
// $price = 40;

// if ($price < 30) {
//     echo "You have insufficient funds to buy this product.";
// } elseif ($price > 30 && $price < 50) {
//     echo "You have enough funds to buy this product, but you might want to consider a cheaper option.";
// } else {
//     echo "You have sufficient funds to buy this product.";
// }

$products = array(
    array("name" => "Wrench", "price" => 25.99),
    array("name" => "Pipe Cutter", "price" => 45.50),
    array("name" => "Plunger", "price" => 15.20),
    array("name" => "Pipe Sealant Tape", "price" => 7.99)
);

// foreach($products as $product)
    // if ($product["price"] < 30) {
    //     echo "You have insufficient funds to buy this product: " . $product["name"] . "<br>";
    // } elseif ($product["price"] > 30 && $product["price"] < 50) {
    //     echo "You have enough funds to buy this product, but you might want to consider a cheaper option: " . $product["name"] . "<br>";
    // } else {
    //     echo "You have sufficient funds to buy this product: " . $product["name"] . "<br>";
    // }

    foreach ($products as $product) {
        if ($product['name'] === 'Plunger'){
            // break;
            continue; // skip this iteration and continue with the next one
        }
        echo "Product: " . $product['name'] . "<br>";
        echo "Price: $" . $product['price'] . "<br>";
        echo "<hr>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditinal Statements</title>
</head>
<body>
    
</body>
</html>
