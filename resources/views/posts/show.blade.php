<!-- resources/views/posts/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Requests and Responses: Set the title dynamically -->
    <title>{{ $post->title }}</title>
</head>
<body>
<!-- Requests and Responses: Display post content -->
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<p>Author: {{ $post->author }}</p>
</body>
</html>
