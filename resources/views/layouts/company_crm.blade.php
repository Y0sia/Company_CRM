<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')Document @show</title>
    <base href="/"></base>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="header__title col-md-3 col-sm-3 col-3">
                    <h1>
                        <a href="{{ route('home') }}">SuperCompany</a>
                    </h1>
                </div>
                <div class="header__menu col-md-9 col-sm-9 col-9">
                    <div class="header__burger">
                        <span></span>
                    </div>
                    <nav class="header__menu__list">
                        <li>
                            <a href="{{ route('home') }}">Главная</a>
                        </li>
                        @if(auth()->check())
                            <li>
                                <a href="{{ route('users.logout') }}">Выход</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('users.create-login') }}">Вход</a>
                            </li>
                            <li>
                                <a href="{{ route('users.create-register') }}">Регистрация</a>
                            </li>
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="flash-message">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(session($msg))
            <p class="alert alert-{{ $msg }}">{{ session($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>
<main>
    @yield('content')
</main>
<footer class="footer">
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="public/js/burger.js"></script>
<script src="public/js/main.js"></script>
</body>
</html>
