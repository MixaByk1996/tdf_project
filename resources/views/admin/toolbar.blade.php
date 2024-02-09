<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>
<body>
<div class="topnav">
    <a href={{route('admin-products.index')}}>Продукты</a>
    <a href="{{route('admin-system')}}">Система</a>
    <a href="{{route('categories.index')}}">Тип</a>
    <a href="{{route('producer.index')}}">Производитель</a>
    <a href="{{route('angle.index')}}">Угол открывания</a>
    <a href="{{route('series.index')}}">Серия</a>
    <a href="/" >Назад на сайт</a>
</div>
@yield('content')
</body>
</html>
