@extends('template')
@section('content')
    <div class="col-sm-6 mx-auto">
        <form action="/addStudentGroup" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Название группы">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Добавить группу">
            </div>
        </form>
    </div>
@endsection
