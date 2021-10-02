@extends("master")

@section("content")


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
