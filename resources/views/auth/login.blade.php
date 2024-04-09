@extends('template')
@section('content')
    <div class="container my-5">
        <div class="col-sm-6 mx-auto">
            <h2 class="text-center">Авторизация на сайте</h2>
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <input name="email" type="email"  class="form-control" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Пароль">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Авторизация">
                </div>
            </form>
        </div>
    </div>
@endsection
