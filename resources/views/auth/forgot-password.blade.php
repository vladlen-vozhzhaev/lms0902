@extends('template')
@section('content')
    <div class="col-sm-7 mx-auto">
        <div class="alert alert-info" role="alert">
            <h3 class="my-3 text-center">Восстановление пароля</h3>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <p>Для восстановления пароля напишите e-mail на который будет отправлена ссылка с подвтреждением</p>
            <form action="{{route('password.email')}}" method="post">
                @csrf
                <div class="mb-3">
                    <input name="email" type="email" required class="form-control" placeholder="E-mail">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary form-control" value="Отправить ссылку для восстановления пароля">
                </div>
            </form>
        </div>
    </div>
@endsection
