<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>

<h1> Welcome to my blog </h1>

@foreach($posts as $post)

<h1><a href="{{ route('posts.show', $post->id )}}"> {{ $post->title }} </a> </h1> <p> <a href="{{route('posts.edit',$post->id) }}" > Edit </a></p>

<br>
<hr/>


@endforeach
    
<a href="/posts/create"> Create Post </a>
</body>
</html>