<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        Body {
            font-family: Calibri, Helvetica, sans-serif;
            background-color: pink;
        }
        button {
            background-color: #4CAF50;
            width: 100%;
            color: orange;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
        }
        form {
            border: 3px solid #f1f1f1;
        }
        input[type=text], input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid green;
            box-sizing: border-box;
        }
        button:hover {
            opacity: 0.7;
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }


        .container {
            padding: 25px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
<center> <h1> Форма входа в админку </h1> </center>
<form action="{{route('admin-index')}}" method="POST">
    @csrf
    <div class="container">
        <label>Email : </label>
        <input type="text" placeholder="Введите email" name="name" id="name" required>
        <label>Пароль : </label>
        <input type="password" placeholder="Введите пароль" name="password" id="password" required>
        <input type="submit">Войти</input>
{{--        <input type="checkbox" checked="checked"> Remember me--}}
{{--        <button type="button" class="cancelbtn"> Cancel</button>--}}
{{--        Forgot <a href="#"> password? </a>--}}
    </div>
</form>
</body>
</html>
