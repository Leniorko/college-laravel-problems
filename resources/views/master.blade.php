<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Улучши свой город</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
</head>

<body>

    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Городской портал</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href=" {{ url('/') }}">Главная</a></li>
                    @guest
                        <li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
                        <li><a href="{{ route('login') }}">Войти</a></li>
                    @endguest
                    {{-- Render part of UI with user specific pages --}}
                    @auth
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                {{ Auth::user()->fullname }}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('profile') }}">Профиль</a></li>
                                <li><a href="{{ route('my_tickets') }}">Мои заявки</a></li>
                                <li><a href="{{ route('new_ticket') }}">Новая заявка</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}">Выход</a></li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    @yield("content")


    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
