@extends('master')
@section('content')

    <div class="container text-center">
        <form method="POST" action="{{ route('login') }}" class="form-row col-md-4 col-md-offset-4">
            @csrf
            @method("POST")

            <h2>Вход</h2>
            <label for="login-input">
                Логин
            </label>
            <input type="text" id="login-input" name="login" placeholder="Логин" class="form-control">
            <label for="password-input">
                Пароль
            </label>
            <input type="password" id="password-input" name="password" placeholder="Пароль" class="form-control">

            <button type="submit" class="btn btn-primary btn-block">Вход</button>
        </form>
    </div>

@endsection
