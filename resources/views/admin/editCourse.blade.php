@extends('adminTemplate')
@section('content')
    <div class="page-content-wrapper border">
        <h2>{{$course->name}}</h2>
        <ul>
            @foreach($teachers as $teacher)
                <li>{{$teacher->name}}</li>
            @endforeach
        </ul>
    </div>
@endsection
