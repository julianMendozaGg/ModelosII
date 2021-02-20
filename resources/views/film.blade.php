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
        <li>
            <form method="GET" action="{{route('film')}}">
                @csrf
                <select name="idioma" id="idioma">
                    <option value="English">English</option>
                    <option value="Italian">Italian</option>
                    <option value="Japanese">Japanese</option>
                    <option value="Mandarin">Mandarin</option>
                    <option value="French">French</option>
                    <option value="German">German</option>
                </select>
                <button>Buscar por Idioma</button>
            </form>
        </li>
    </ul>
    
</body>
</html>