<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>View product index controller</h1>

    <a href="{{ URL::route('products')}}">Link to products</a>
    {{-- <h2>{{$title}}</h2> --}}
        @foreach ($myphone as $item)
            <h3>{{$item}}
        @endforeach

</body>
</html>