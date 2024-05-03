@extends('adminTemplate')
@section('content')
    <div class="container my-5">
        <h3 class="text-center my-3">Добавление лекции</h3>
        <form action="/addLecture" method="post">
            @csrf
            <div class="mb-3">
                <input name="name" type="text" class="form-control" max="255" placeholder="Навзание лекции">
            </div>
            <div class="mb-3">
                <input name="description" type="text" class="form-control" max="255" placeholder="Описание">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Добавить">
            </div>
        </form>
    </div>
@endsection
