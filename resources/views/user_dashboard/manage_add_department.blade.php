@extends('layouts.app')

@section('content')

    <div class="container-fluid">

      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add Department</h2>

          <div id="alert" class="text-center">
            @include('flash::message')
          </div>

          <div class="jumbotron">
            {!! Form::open(array('route' => 'store_user')) !!}


            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('department_id', 'University') }}</div>
                <div class="col-md-10">{{ Form::select('department_id', $roles, null, ['class' => 'form-control', 'required', 'id' => 'university_id', 'placeholder' => 'Select University']) }}
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="row">
                <div class="col-md-2">{{ Form::label('department_name', 'Department Name') }}</div>
                <div class="col-md-10">{{ Form::text('department_name', null, ['class' => 'form-control', 'required']) }}
                </div>
              </div>
            </div>

            {{ Form::submit('Save', ['class' => 'btn btn-block btn-primary']) }}

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

        $('#university_id').on('change', function(){

                var university_id = $(this).val();

                $.post("{{ URL::route('department.list') }}",{university_id:university_id}, function(data){
                  $('#department_id').html(data);
                })

           })

        });

    });
  </script>

@endsection
