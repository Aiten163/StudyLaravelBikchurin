<!-- 13.1 пункт 2 !-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <td>
            Id
        </td>
        <td>
            Имя
        </td>
        <td>
            Дата рождения
        </td>
        <td>
            Должность
        </td>
        <td>
            Зарплата
        </td>
    </tr>
    @foreach($emp as $elem)
        <tr>
            <td>
                {{ $elem->id }}
            </td>
            <td>
                {{ $elem->name }}
            </td>
            <td>
                {{ $elem->birthday  }}
            </td>
            <td>
                {{ $elem->position  }}
            </td>
            <td>
                {{ $elem->salary  }}
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
