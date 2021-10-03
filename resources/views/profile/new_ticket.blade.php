@extends("master")

@section('content')


    <div class="container">
        <form action="{{ route('new_ticket') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("POST")
            <input type="text" name="name" placeholder="name" required id="">
            <input type="text" name="description" placeholder="description" required id="">
            <input type="file" name="problem_image" placeholder="problem img" required id="">
            <button type="submit">Отправить</button>
        </form>
    </div>

@endsection
