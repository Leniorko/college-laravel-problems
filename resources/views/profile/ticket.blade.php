@extends('master')

@section('content')

    <div class="container">
        <p>{{ $ticket->name }}</p>
        <p>{{ $ticket->description }}</p>
        <p>{{ $ticket->created_at }}</p>
        <p>{{ $ticket->status }}</p>

        <img src="{{ $ticket->problem_img_link }}" alt="">
    </div>

@endsection
