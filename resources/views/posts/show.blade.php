<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Show Posts</title>
</head>
<body>
    <h1>Post 1: {{ $post }}</h1>
    @if ($post == 'laravel')
        <p>Publicacion relacionada a laravel</p>
    @endif
</body>
</html>