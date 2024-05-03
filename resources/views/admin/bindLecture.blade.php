@extends('adminTemplate')
@section('content')
    <div class="container my-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Лекция</th>
                <th scope="col">Курс</th>
            </tr>
            </thead>
            <tbody>
                @foreach($lectures as $lecture)
                    <tr>
                        <td>{{$lecture->name}}</td>
                        <td>
                            <form action="/bindLectureWithCourse" method="post">
                                @csrf
                                <input type="hidden" value="{{$lecture->id}}" name="lecture_id">
                                <select name="course_id" id="">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                                <div class="mb-2">
                                    <input type="submit" value="Применить">
                                </div>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
