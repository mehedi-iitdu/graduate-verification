@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

                <div class="jumbotron">
                    <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Request to verify</h2>

                    <div class="form-group row">
                        <label for="stakeholder" class="col-sm-6 col-form-label"><h3>Student Information</h3></label>
                    </div>

                    <div class="row">
                        <div for="name" class="col-sm-6">Name</div>
                        <div class="col-sm-6"> {{ $user->first_name." ".$user->last_name }} </div>
                    </div>

                    <div class="row">
                        <div for="name" class="col-sm-6">Date of Birth</div>
                        <div class="col-sm-6">{{ $student->date_of_birth }}</div>
                    </div>

                    <div class="row">
                        <div for="name" class="col-sm-6">University</div>
                        <div class="col-sm-6">{{ $university->name }}</div>
                    </div>

                    <div class="row">
                        <div for="name" class="col-sm-6">Registartion Number</div>
                        <div class="col-sm-6">{{ $student->registration_no }}</div>
                    </div>

                    <div class="row">
                        <div for="name" class="col-sm-6">Email</div>
                        <div class="col-sm-6">{{ $user->email }}</div>
                    </div>


                </div>

                <div class="jumbotron">

                    @include('partials._error_message')
                    {!! Form::open(array('route' => ['stakeholder.payment_request', $student->registration_no])) !!}

                    <div class="form-group row">
                        <label for="stakeholder" class="col-sm-6 col-form-label"><h3>Stackholder Information</h3></label>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-6 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="institute" class="col-sm-6 col-form-label">Institute</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="institute" id="institute" placeholder="Institute">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="designation" class="col-sm-6 col-form-label">Designation</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="designation" id="designation" placeholder="CTO">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-6 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="email" id="email" placeholder="example@gmail.com">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="country" class="col-sm-6 col-form-label">Country</label>
                        <div class="col-sm-6">
                            <select type="text" name="country" class="form-control" id="country">
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="India">India</option>
                            </select>
                        </div>
                    </div>

                    {{ Form::submit('Request', ['class' => 'btn btn-block btn-primary']) }}
                    {!! Form::close() !!}

                </div>
            </main>
        </div>
    </div>
@endsection