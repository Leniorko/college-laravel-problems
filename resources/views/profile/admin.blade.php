@extends("master")

@section('content')

    <div class="container">
        @foreach ($tickets as $ticket)
            <div class="container">
                <p>{{ $ticket->name }}</p>
                <p>{{ $ticket->description }}</p>
                <p>{{ $ticket->created_at }}</p>
                <p>{{ $ticket->status }}</p>
                <img src="{{ $ticket->problem_img_link }}" alt="">


                @if ($ticket->status === 'new')
                    <form action="/profile/admin" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("POST")
                        <input type="text" name="id" value="{{ $ticket->id }}" style="display: none;" id="">
                        <input type="file" name="solution_image" placeholder="Solution img" required id="">
                        <button type="submit" name="decision" value="resolved">Resolved</button>
                    </form>

                    <form action="/profile/admin" method="POST">
                        @csrf
                        @method("POST")
                        <input type="text" name="id" value="{{ $ticket->id }}" style="display: none;" id="">
                        <button type="submit" name="decision" value="rejected">Rejected</button>
                    </form>
                @else

                    <img src="{{ $ticket->solution_img_link }}" alt="">

                @endif

            </div>
        @endforeach
    </div>
@endsection
