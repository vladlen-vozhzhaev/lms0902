@extends('template')
@section('content')
    <div class="col-sm-5 mx-auto my-5 alert alert-info">
        <h3 class="my-3 text-center">Установка нового пароля</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('password.update') }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-3">
                <input value="{{$request->email}}" required type="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <input type="password" name="password" required placeholder="Новый пароль" class="form-control">
            </div>
            <div class="mb-3">
                <input type="password" name="password_confirmation" required placeholder="Подтвердите новый пароль" class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="Переустановить пароль" class="btn btn-primary form-control">
            </div>
        </form>
    </div>
@endsection
