@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add User</h2>

          <div class="jumbotron">
            {!! Form::open() !!}


            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('first_name', 'First Name') }}</div>
                <div class="col-md-10">{{ Form::text('first_name', null, ['class' => 'form-control', 'required']) }}
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('last_name', 'Last Name') }}</div>
                <div class="col-md-10">{{ Form::text('last_name', null, ['class' => 'form-control', 'required']) }}
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('email', 'Email') }}</div>
                <div class="col-md-10">{{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('mobile_no', 'Mobile No.') }}</div>
                <div class="col-md-10">{{ Form::text('mobile_no', null, ['class' => 'form-control', 'required']) }}
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('role_id', 'Role') }}</div>
                <div class="col-md-10">{{ Form::select('role_id', $roles, null, ['class' => 'form-control', 'required']) }}
                </div>
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

@endsection