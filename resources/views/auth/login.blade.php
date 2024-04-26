@extends('template')
@section('content')
    <div class="container my-5">
        <div class="col-sm-6 mx-auto">
            <h2 class="text-center my-3">Авторизация на сайте</h2>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="mb-3">
                    <input name="email" type="email"  class="form-control" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Пароль">
                </div>
                <p><a href="/forgot-password">Забыли пароль?</a></p>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Авторизация">
                </div>
            </form>
        </div>
    </div>
@endsection
