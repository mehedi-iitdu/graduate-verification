@extends('layouts.home_layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <h2>Student Information</h2>

                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-4">Name</div>
                        <div class="col-md-8">{{$student->user->first_name }} {{$student->user->last_name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Registration</div>
                        <div class="col-md-8">{{$student->registration_no}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Session</div>
                        <div class="col-md-8">{{$student->session}}</div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Dept./Inst.</div>
                        <div class="col-md-8">{{$student->department->name}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">University</div>
                        <div class="col-md-8">{{$student->department->university->name}}</div>
                    </div>
                </div>

                @php($sem = 0)

                @foreach($all_marks as $marks)
                    <h2>Results of Semester {{++$sem}}</h2>
                    <div class="jumbotron">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Total Credit</th>
                                <th>GPA</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($id = 0)
                            @php($point=0)
                            @php($credit=0)
                            @foreach($marks as $mark)
                                <tr>
                                    <th>{{ ++$id }}</th>
                                    <td>{{ $mark->course->code }}</td>
                                    <td>{{ $mark->course->name }}</td>
                                    <td>{{ $mark->course->credit }}</td>
                                    <td>{{ $mark->gpa }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Calculated GPA</th>
                                <th>{{ $gpa[$sem - 1] <= 0.0 ? "[invalid]" : round($gpa[$sem - 1], 2) }}</th>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                @endforeach

                <h4>Calculated CGPA is {{ $cgpa <= 0.0 ? "[invalid]" : round($cgpa, 2) }}</h4>

                {!! Form::open(array('route' => array('student.verify', $verification_id), 'files' => 'true')) !!}

                <img height="40px" width="160px" src="/storage/{{ $sign_link }}">

            </main>
        </div>
    </div>
@endsection

@section('css')
    <style type="text/css">
        .img_container {
            position: relative;
        }

        img {
            position: absolute;
            width: 250px;
            height: 250px;
        }

        #btn_pic {
            position: absolute;
            left: 95px;
            bottom: 30px;
            text-align: center;
            opacity: 0;
            transition: opacity .35s ease;
            border: 2px solid;
        }

        .img_container:hover #btn_pic {
            opacity: 1;
        }

    </style>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
            });
        });
    </script>
@endsection
