@extends('master')

@section('content')

    <div class="container">
        <p>Name: {{ $user->fullname }}</p>
        <p>Login: {{ $user->login }}</p>
        <p>Email: {{ $user->email }}</p>
    </div>

@endsection
