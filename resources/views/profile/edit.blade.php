@extends('template')
@section('content')
    <h3>Профиль</h3>
    <p><strong>ID: </strong>{{$user->id}}</p>
    <p><strong>Name: </strong>{{$user->name}}</p>
    <p><strong>E-mail: </strong>{{$user->email}}</p>
@endsection
