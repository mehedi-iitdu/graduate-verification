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

                    <div id="university_info">

                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="department">Department</label>
                        <div id="department_id" class="col-sm-10">
                            <select class="form-control">
                                <option>Select Department</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="semester">Semester</label>
                        <div id="semester_id" class="col-sm-10">
                            <select class="form-control">
                                <option>Select Semester</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Course</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Course Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="credit" class="col-sm-2 col-form-label">Credit</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="credit" name="credit" placeholder="Course Credit">
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

            $.post("{{ URL::route('role_based_info') }}",{role_name:'Registrar'}, function(data){
                $('#university_info').html(data);

                $('#university_id').on('change', function(){

                    var university_id = $('#university_id option:selected').val();

                    $.post("{{ URL::route('department.list') }}",{university_id:university_id}, function(data){
                        $('#department_id').html(data);

                        $('#department_id').on('change', function(){

                            var department_id = $('#department_id option:selected').val();

                            $.post("{{ URL::route('department.semesterList') }}",{department_id:department_id}, function(data){
                                $('#semester_id').html(data);
                            });

                        });

                    });

                });

            });

        });
    </script>

@endsection