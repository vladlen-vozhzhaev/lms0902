@extends('adminTemplate')
@section('content')
    <div class="page-content-wrapper border">
        <h2>{{$course->name}}</h2>
        <ul>
            @foreach($teachers as $teacher)
                <li>
                    <span class="h4">{{$teacher->name}}</span>
                    @if($teacher->appointed)
                        <span></span>
                    @else
                        <a href="/addTeacherCourse/{{$teacher->id}}/{{$course->id}}" class="btn btn-primary btn-sm">Назначить</a>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
