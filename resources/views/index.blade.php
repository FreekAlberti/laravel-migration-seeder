<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista fumetti: </h1>
    <ul>
        @foreach ($comics as $comic)
        <li>
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}">    
        </li>    
        @endforeach
    </ul>
</body>
</html>