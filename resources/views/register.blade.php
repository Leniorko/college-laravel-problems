@extends("master")

@section('content')

    <div class="container text-center">

        @if ($register_success ?? false)
            <div class="alert alert-success">Регистрация прошла успешно! Теперь вы можете войти в систему.</div>
        @endif

        <form class="form-signin col-md-4 col-md-offset-4" action="{{ route('register') }}" method="POST">
            @csrf
            @method("POST")

            <h2 class="form-signin-heading">Регистрация</h2>

            <label for="inputEmail" class="sr-only">ФИО</label>
            <input type="text" name="fullname" class="form-control" placeholder="ФИО" required autofocus="">

            <label for="inputEmail" class="sr-only">Логин</label>
            <input type="text" name="login" class="form-control" placeholder="Логин" required autofocus="">

            <label for="inputEmail" class="sr-only">Электронная почта</label>
            <input type="email" name="email" class="form-control" placeholder="Электронная почта" required autofocus="">
            <label for="inputPassword" class="sr-only">Пароль</label>
            <input type="password" name="password" class="form-control" placeholder="Пароль" required>

            <label for="inputPassword" class="sr-only">Повторите пароль</label>
            <input type="password" name="nothing" class="form-control" placeholder="Повторите пароль" required>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me" name="personal_data_confirmation" required> Согласие на
                    обработку персональных данных
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div>

@endsection
