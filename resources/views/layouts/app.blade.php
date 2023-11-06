<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') :: Объявления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/main.css" type="text/css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{route('index')}}" class="navbar-brand me-auto">&nbsp;Главная&nbsp;</a>
            <a href="{{route('register')}}" class="nav-item nav-link">&nbsp;Регистрация&nbsp;</a>
            <a href="{{route('login')}}" class="nav-item nav-link">&nbsp;Вход&nbsp;</a>
            <a href="{{route('home')}}" class="nav-item nav-link">&nbsp;Мои объявления&nbsp;</a>
            <form action="{{route('logout')}}" method="POST" class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>
        </div>
    </nav>
    <h1 class="my-3 text-center">Объявления</h1>
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
