@extends('template')
@section('content')
    <div class="col-11 col-sm-8 col-md-6 col-xl-4 mx-auto rounded px-2 py-3 px-sm-5 my-5 alert alert-info">
        <div class="text-end">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input type="submit" hidden id="logout">
                <a href="#" onclick="logout.click()">Выход</a>
            </form>
        </div>
        <h3 class="my-3 text-center">Подтверждение почты</h3>
        <p class="my-3">
            Спасибо за регистрацию! Для продолжения работы в системе мне необходимо удостовериться что e-mail
            действительно принадлежит вам.
            <br><br>
            Вам на почту отправлено письмо, в котором содержится ссылка. Перейдите по ней, чтобы верифицировать e-mail.
            <br><br>
            Если письмо не пришло, запросите повторную отправку.
        </p>
        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-danger">
                Повторное письмо успешно отправлено!
            </div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <input type="submit" value="Запросить письмо ещё раз" class="btn btn-lg btn-primary form-control">
        </form>
    </div>
@endsection
