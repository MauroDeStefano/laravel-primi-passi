<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi home page</title>
</head>
<body>
   <ul>
     <li><a href="{{route('home')}}">Home</a></li>
     <li><a href="{{route('about')}}">About Us</a></li>
     <li><a href="{{route('contact')}}">contact</a></li>
   </ul>
    <h1>Hello World!</h1>
    <h4>{{ $name }} {{ $surname }}</h4>
    <ul>
        @foreach ($hobbies as $hobby)
           <li>{{$hobby}}</li> 
        @endforeach
    </ul>
</body>
</html>