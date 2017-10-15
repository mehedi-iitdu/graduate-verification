@extends('layouts.app')

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
                @php($tot_credit = 0)
                @php($tot_point = 0)
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
                            @php($point += $mark->course->credit * $mark->gpa)
                            @php($credit += $mark->course->credit)
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <th>Calculated GPA</th>
                                <th>{{ $point / $credit }}</th>
                            </tr>
                            @php($tot_credit += $credit)
                            @php($tot_point += $point)
                        </tbody>
                    </table>
                </div>

                @endforeach

                <h4>Calculated CGPA is {{ $tot_point / $tot_credit }}</h4>

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

@endsection
