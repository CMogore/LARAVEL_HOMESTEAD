<!-- resources/views/posts/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
<h1>Blog Posts</h1>
<ul>
    <!-- URL Generation: Generate dynamic URLs for each post -->
    @foreach($posts as $post)
        <li><a href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
</body>
</html>
