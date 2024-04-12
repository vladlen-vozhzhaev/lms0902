@extends('adminTemplate')
@section('content')
    <div class="container my-5">
        <div class="col-sm-6 mx-auto">
            <form action="/addCourse" method="post">
                @csrf
                <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Название курса">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Добавить курс">
                </div>
            </form>
        </div>
    </div>
@endsection
