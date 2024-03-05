<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <p>{{$content}}</p>
    @foreach ($links as $elem)
    <br><a href="{{$elem['href']}}">{{$elem['text']}}</a>
    @endforeach
</body>
</html>