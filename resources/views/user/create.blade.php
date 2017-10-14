@extends('layouts.app')

@section('content')

    <div class="container-fluid">

      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add User</h2>

          <div class="jumbotron">
            @include('partials._error_message')
            {!! Form::open(array('route' => 'user.create')) !!}

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
                <div class="col-md-2">{{ Form::label('role', 'Role') }}</div>
                <div class="col-md-10">{{ Form::select('role', $roles, null, ['class' => 'form-control', 'required', 'id' => 'role_id', 'placeholder' => 'Select Role']) }}
                </div>
              </div>
            </div>

            <div id="role_info">

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

        $('#role_id').on('change', function(){


            var role_name = $(this).val();

           $.post("{{ URL::route('role_based_info') }}",{role_name:role_name}, function(data){
             $('#role_info').html(data);


             $('#university_id').on('change', function(){

                var university_id = $(this).val();

                $.post("{{ URL::route('department.list') }}",{university_id:university_id}, function(data){
                  $('#department_id').html(data);
                })

             });

           })

        });

    });
  </script>

@endsection
