@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2  class="d-none d-sm-block text-center">Add Result</h2>

          <hr>
          <div class="jumbotron">
            @include('partials._error_message')
            {!! Form::open() !!}
            <input type="hidden" name="department_id" id="department_id" value="{{ $department_id }}">
            <div class="row">
              <div class="form-group col-md-6">
                {{ Form::label('semester_no', 'Semester No.') }}
               
                {{ Form::select('semester_no', $semesters, null, ['class' =>'form-control', 'placeholder' => 'Select semester', 'id' => 'semester_no' ]) }}
                <p id="semester_no_error" class="error pull-right"></p>
              </div>
              
              <div class="form-group col-md-6">
                {{ Form::label('student_registration_no', 'Student Registration No.') }}
                
                  {{ Form::text('student_registration_no', null, ['class' =>'form-control', 'placeholder' => 'Registration No.', 'id' => 'student_registration_no' ]) }}
                  <p id="student_registration_no_error" class="error pull-right"></p>
              </div>
            </div>
            <button class="btn btn-primary pull-right" id='btn-proceed' >Proceed</button>                                                                                                                                                                                                                                                                                                                                 


            {!! Form::close() !!}

            
          </div>

          <div>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
                  <th>course Code</th>
                  <th>Credit</th>
                  <th>GPA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Data Science</td>
                  <td>CSE-803</td>
                  <td>3</td>
                  <td>3.6</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Data Science</td>
                  <td>CSE-803</td>
                  <td>3</td>
                  <td>3.6</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Data Science</td>
                  <td>CSE-803</td>
                  <td>3</td>
                  <td>3.6</td>
                </tr>
              </tbody>
            </table>
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
      $('#btn-proceed').on('click', function(){
        $department_id = $('#department_id').val();
        $semester_no = $('#semester_no').val();
        
        if($semester_no==''){
          $('#semester_no_error').text('Select a semester');
          return false;
        }
        else{
          $('#semester_no_error').text('');
        }
        
        $student_registration_no = $('#student_registration_no').val();
        if($student_registration_no==''){
          $('#student_registration_no_error').text("Enter student's registration no.");
          return false; 
        }
        else{
          $('#student_registration_no_error').text('');
        }

        $.post("{{ URL::route('marks_fields') }}", {department_id:$('#department_id').val(), semester_no:$semester_no}, function(data){
          console.log(data);

        });
        return false;
      });
    });
  </script>
@endsection