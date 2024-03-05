<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <p>{{$content}}</p>
    <table>
        <tr>
            <td>Номер</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Статус</td>
        </tr>
        @foreach($users as $key=>$user)
        <tr @if($user['banned']) style='color:red' @else style='color:green' @endif>
            <td>{{$key+1}}</td>
            <td>{{$user['name']}}=</td>
            <td>{{$user['surname']}}</td>
            <td>
            @if($user['banned'])
            Забанен
            @else
            Активен
            @endif
            </td>

        </tr>
        @endforeach
    </table>
</body>
</html>