@extends("master")

@section("content")
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
            <a class="navbar-brand" href="#">Городской портал</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Главная</a></li>
                <li><a href="register.html">Зарегистрироваться</a></li>
                <li><a href="login.html">Войти</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        Иванов И.И.
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="list.html">Мои заявки</a></li>
                        <li><a href="new.html">Новая заявка</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Привет, дорогой друг!</h1>
        <p>
            Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать обо всех проблемах города, поэтому мы
            предлагаем тебе помочь своему городу!
        </p>
        <p>
            Увидел проблему? Дай нам знать о ней и мы ее решим!
        </p>
        <p>
            <a class="btn btn-success btn-lg" href="#" role="button">Сообщить о проблеме</a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Присоедениться к проекту</a>
        </p>
    </div>
</div>

<div class="container">
    <h2>Последние решенные проблемы</h2>
    <br>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{asset('img/decision1.jpeg')}}" alt="Яма на дороге">
                <img src="{{asset('img/problem1.jpeg')}}" alt="Яма на дороге">
            </div>
        </div>
    </div>
</div>
@endsection
