<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>
<body>
    <h1>Encuentra y organiza tus peliculas por: </h1>
    <ul>
        <li><a href="{{route('film.show','ASC')}}">De la A-Z</a></li>
        <li><a href="{{route('film.show','DESC')}}">De la Z-A</a></li>
        <li><a href="{{route('film.show','DESC')}}">Las ultimas de acuerdo a su fecha.</a></li>
        <li><a href="{{route('film.show','DESC')}}">Según Lenguaje</a></li>
    </ul>
    
</body>
</html>