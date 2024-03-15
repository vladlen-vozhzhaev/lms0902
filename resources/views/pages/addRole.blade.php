@extends('template')
@section('content')
    <div class="col-sm-6 mx-auto">
        <h2 class="text-center">Добавление роли</h2>
        <form action="/addRole" method="post">
            @csrf
            <div class="mb-3">
                <input name="name" type="text" class="form-control" placeholder="Название роли">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Добавить роль">
            </div>
        </form>
    </div>
    <div class="col-sm-6 mx-auto">
        <h5>Существующие роли</h5>
        @foreach($roles as $role)
            <p>{{$role->name}}</p>
        @endforeach
    </div>
@endsection

