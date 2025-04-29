<?php

// // loops

// $ninjas = ['vincent', 'mugo', 'mugondora', 'rashy'];

// // for ($name =0; $name < count($ninjas); $name++){
// //     echo $ninjas[$name] . "<br>";
// // }

// foreach($ninjas as $ninja){
//     echo $ninja . '<br/>';
// }

// $blogs = [
//     ['title' => 'Exploring Nairobi Nightlife', 'author' => 'Vin', 'content' => 'A vibrant tour through Nairobi’s best clubs, lounges, and rooftop bars.', 'likes' => 30],
//     ['title' => 'Top 5 Productivity Hacks for Developers', 'author' => 'Rashy', 'content' => 'Boost your workflow with these proven habits and tools.', 'likes' => 40],
//     ['title' => 'Why Remote Work Is the Future', 'author' => 'Mugo', 'content' => 'A deep dive into the benefits and challenges of remote working in tech.', 'likes' => 50],
//     ['title' => 'Mastering PHP in 2025', 'author' => 'Mugondora', 'content' => 'Learn the latest features in PHP and how to use them effectively.', 'likes' => 60],
//     ['title' => 'Building a Blog with Laravel', 'author' => 'Mugondora', 'content' => 'Step-by-step guide to creating your first Laravel blog application.', 'likes' => 70],
//     ['title' => 'Deploying Laravel Projects to Production', 'author' => 'Mugondora', 'content' => 'Everything you need to know about getting your Laravel app live.', 'likes' => 80],
//     ['title' => 'Understanding MVC Architecture', 'author' => 'Mugondora', 'content' => 'What is MVC and why is it important for web development?', 'likes' => 90],
//     ['title' => 'Top 10 VS Code Extensions for PHP Developers', 'author' => 'Mugondora', 'content' => 'Enhance your coding experience with these tools.', 'likes' => 100],
//     ['title' => 'How to Optimize Your MySQL Queries', 'author' => 'Mugondora', 'content' => 'Speed up your applications by writing efficient database queries.', 'likes' => 110],
//     ['title' => 'Securing Your Laravel Application', 'author' => 'Mugondora', 'content' => 'Best practices to keep your Laravel projects safe from attacks.', 'likes' => 120],
// ];

$products = [
    [
        'name' => 'Wireless Headphones',
        'price' => 59.99,
        'description' => 'Noise-cancelling over-ear headphones with Bluetooth 5.0.',
        'in_stock' => true
    ],
    [
        'name' => 'Gaming Mouse',
        'price' => 29.99,
        'description' => 'Ergonomic RGB gaming mouse with 6 programmable buttons.',
        'in_stock' => true
    ],
    [
        'name' => 'Mechanical Keyboard',
        'price' => 89.99,
        'description' => 'RGB mechanical keyboard with brown switches.',
        'in_stock' => false
    ],
    [
        'name' => '4K Monitor',
        'price' => 249.99,
        'description' => '27-inch UHD monitor with HDR support.',
        'in_stock' => true
    ],
    [
        'name' => 'USB-C Charger',
        'price' => 19.99,
        'description' => 'Fast-charging 45W USB-C wall adapter.',
        'in_stock' => true
    ]
];


// foreach($blogs as $blog){
//     echo "<h2>Title: {$blog['title']}<h2/>";
//     echo "<h4>Author: {$blog['author']}<h4/>";
//     echo "<p>Content: {$blog['content']}</p>";
//     echo "<p>Likes: {$blog['likes']}</p>";
//     echo "<hr>";
// }

// while loop
// $i = 0;
// while($i < count($blogs)){
//     echo $blogs[$i]['title'];
//     echo '<br />';
//     $i++;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPS</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product){ ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
            <p>Description: <?php echo $product['description']; ?></p>  
            <p>Status: <?php echo $product['in_stock'] ? 'In Stock' : 'Out of Stock'; ?></p>
            <hr>

        <?php } ?>
    </ul>
</body>
</html>