<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <!-- Bootstrap CDN for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .blog-post {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .blog-title {
            color: #0d6efd;
        }
        .likes {
            font-weight: bold;
            color: #198754;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <h1 class="mb-4 text-center text-primary">📝 My Blog Posts</h1>

    <?php
    $blogs = [
        ['title' => 'Exploring Nairobi Nightlife', 'author' => 'Vin', 'content' => 'A vibrant tour through Nairobi’s best clubs, lounges, and rooftop bars.', 'likes' => 30],
        ['title' => 'Top 5 Productivity Hacks for Developers', 'author' => 'Rashy', 'content' => 'Boost your workflow with these proven habits and tools.', 'likes' => 40],
        ['title' => 'Why Remote Work Is the Future', 'author' => 'Mugo', 'content' => 'A deep dive into the benefits and challenges of remote working in tech.', 'likes' => 50],
        ['title' => 'Mastering PHP in 2025', 'author' => 'Mugondora', 'content' => 'Learn the latest features in PHP and how to use them effectively.', 'likes' => 60],
        ['title' => 'Building a Blog with Laravel', 'author' => 'Mugondora', 'content' => 'Step-by-step guide to creating your first Laravel blog application.', 'likes' => 70],
        ['title' => 'Deploying Laravel Projects to Production', 'author' => 'Mugondora', 'content' => 'Everything you need to know about getting your Laravel app live.', 'likes' => 80],
        ['title' => 'Understanding MVC Architecture', 'author' => 'Mugondora', 'content' => 'What is MVC and why is it important for web development?', 'likes' => 90],
        ['title' => 'Top 10 VS Code Extensions for PHP Developers', 'author' => 'Mugondora', 'content' => 'Enhance your coding experience with these tools.', 'likes' => 100],
        ['title' => 'How to Optimize Your MySQL Queries', 'author' => 'Mugondora', 'content' => 'Speed up your applications by writing efficient database queries.', 'likes' => 110],
        ['title' => 'Securing Your Laravel Application', 'author' => 'Mugondora', 'content' => 'Best practices to keep your Laravel projects safe from attacks.', 'likes' => 120],
    ];

    for ($i = 0; $i < count($blogs); $i++) {
        echo '<div class="blog-post">';
        echo "<h2 class='blog-title'>{$blogs[$i]['title']}</h2>";
        echo "<p><strong>Author:</strong> {$blogs[$i]['author']}</p>";
        echo "<p>{$blogs[$i]['content']}</p>";
        echo "<p class='likes'>👍 Likes: {$blogs[$i]['likes']}</p>";
        echo '</div>';
    }
    ?>
</div>

</body>
</html>
