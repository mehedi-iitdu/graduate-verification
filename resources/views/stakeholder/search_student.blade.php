@extends('layouts.home_layout')

@section('content')
    <div class="container">
        <div class="row">
            <main class="col-sm-12" role="main">
                <h2 style="margin-bottom: 20px" class="d-none d-sm-block">Search Student</h2>
                <hr>
                <div class="jumbotron">
                    @include('partials._error_message')
                    {!! Form::open(array('route' => 'stakeholder.search')) !!}
                    <div class="form-group row">
                        <label for="Student" class="col-sm-6 col-form-label"><h4>Student Credentials</h4></label>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-6 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" id="email" placeholder="username@domain.com"
                            required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="registration_no" class="col-sm-6 col-form-label">Registration Number</label>
                        <div class="col-sm-6">
                            <input type="text" name="registration_no" class="form-control" id="registration_no"
                                   placeholder="2013-000-111" pattern="[0-9]{4}[-][0-9]{3}[-][0-9]{3}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label" for="date_of_birth">Date of Birth</label>
                        <div class='input-group date col-sm-6'>
                            <input type="text" class="form-control" name="date_of_birth" placeholder="mm/dd/yyyy" id='date_of_birth' required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-6 col-form-label" for="university_id">University</label>
                        <div id="university_list" class="col-sm-6">
                            <select class="form-control">
                                <option>Select University</option>
                            </select>
                        </div>
                    </div>

                    {{ Form::submit('Search', ['class' => 'btn btn-block btn-primary']) }}
                    {!! Form::close() !!}
                </div>
            </main>
        </div>
    </div>
@endsection


@section('script')

    <script type="text/javascript">

        $(function () {
            $('#date_of_birth').datepicker({ changeYear: true, changeMonth:true, yearRange: "1980:"+new Date().getFullYear() });
        });

        $(document).ready(function(){
            $.ajaxSetup({
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
            });

            $.post("{{ URL::route('university.list') }}",{role_name:'Registrar'}, function(data){
                $('#university_list').html(data);
            });

        });

        

    </script>

@endsection
