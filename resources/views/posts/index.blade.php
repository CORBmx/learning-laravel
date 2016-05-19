<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>lindos posts:</h1>
    @foreach($posts as $post)
        <h4>De: {{$post->user->name}}</h4>
        <p>
            {{$post->content}}
        </p>
    @endforeach
</body>
</html>
