@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Add Course</h2>

                <hr>

                <div class="jumbotron">
                    @include('partials._error_message')
                    {!! Form::open(array('route' => 'course.create')) !!}

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="university_id">University</label>
                        <div id="university_list" class="col-sm-10">
                            <select class="form-control" required="required">
                                <option>Select University</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="department_id">Department</label>
                        <div id="department_list" class="col-sm-10">
                            <select class="form-control" required="">
                                <option>Select Department</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="semester_no">Semester</label>
                        <div id="semester_list" class="col-sm-10">
                            <select class="form-control" required="">
                                <option>Select Semester</option>
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Course Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" required="" id="name" name="name" placeholder="Course Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="code" class="col-sm-2 col-form-label">Course Code</label>
                        <div class="col-sm-10">
                            <input type="text" for="code" required="" class="form-control" id="code" name="name" placeholder="Course Code">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="credit" class="col-sm-2 col-form-label">Credit</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" required="" id="credit" name="credit" placeholder="Course Credit">
                        </div>
                    </div>

                    {{ Form::submit('Add', ['class' => 'btn btn-block btn-primary']) }}

                    {!! Form::close() !!}

                </div>
            </main>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
            });

            $.post("{{ URL::route('university.list') }}",{role_name:'Registrar'}, function(data){
                $('#university_list').html(data);

                $('#university_id').on('change', function(){

                    var university_id = $('#university_id option:selected').val();

                    $.post("{{ URL::route('department.list') }}",{university_id:university_id}, function(data){
                        $('#department_list').html(data);

                        $('#department_id').on('change', function(){

                            var department_id = $('#department_id option:selected').val();

                            $.post("{{ URL::route('department.semesterList') }}",{department_id:department_id}, function(data){
                                $('#semester_list').html(data);
                            });

                        });

                    });

                });

            });

        });
    </script>

@endsection