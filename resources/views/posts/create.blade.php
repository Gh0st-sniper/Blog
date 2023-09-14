<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>

<h1> Create a post </h1>

<form action="/posts" method="post">
    @csrf

<label for=""> Title </label>
<input type="text" name="title" id=""><br>
<label for=""> Body </label>
<input type="text" name="body" id=""><br>

<input type="submit" value="Create">
</form>
    
</body>
</html>