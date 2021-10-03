@extends("master")

@section('content')


    <div class="container">
        @foreach ($tickets as $ticket)
            <div class="thumbnail">
                <p>{{ $ticket->name }}</p>
                <p>{{ $ticket->description }}</p>
                <p>{{ $ticket->created_at }}</p>
                <img src="{{ $ticket->problem_img_link }}" class="img-responsive" alt="">
            </div>
        @endforeach
    </div>

@endsection
