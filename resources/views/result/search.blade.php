@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2  class="d-none d-sm-block text-center">Search Result</h2>

          <hr>
          <div class="jumbotron">
            <!-- {!! Form::open(array('route' => 'result.submit')) !!} -->
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
            <button class="btn btn-primary pull-right" id='btn-proceed' >Proceed</button>    <br><br> <br><br>
            <div id="marks_field">

            </div>

            <!-- {!! Form::close() !!} -->


          </div>

          <div>

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

        $.post("{{ URL::route('marks_views') }}", {department_id:$department_id, semester_no:$semester_no, student_registration_no:$student_registration_no}, function(data){
            $('#marks_field').html(data);
            var total_credit = 0.0;
            var total_gpa = 0.0;
            $('tbody>tr').each(function(){
              credit = parseFloat($(this).find('.credit:first').text());
              total_gpa += credit*parseFloat($(this).find('.gpa:first').text());
              total_credit += credit;
            });
            var cgpa = (total_gpa/total_credit).toFixed(2);
            $('tbody').append('<tr><td colspan="3" align="right">CGPA:</td><td>'+cgpa.toString()+'</td></tr>');
        });
        return false;
      });

    });
  </script>
@endsection
