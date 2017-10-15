@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2  class="d-none d-sm-block text-center">Edit Result</h2>
          <hr>
          <div class="jumbotron">
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <td>Depatment</td>
                  <td>Programoffice</td>
                  <td></td>
                  <td></td>
                </tr>
              </thead>
            </table>

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

        $.post("{{ URL::route('marks_edit') }}", {department_id:$department_id, semester_no:$semester_no, student_registration_no:$student_registration_no}, function(data){
            
          $('#marks_field').html(data);
          $('#requestBtn').on('click', function(){
              $.post("{{ URL::route('permission.request_modal') }}", {department_id:$department_id, semester_no:$semester_no, student_registration_no:$student_registration_no}, function(data){
                $('#requestPermission').html(data);
                $('#requestPermission').modal();

            });
            
          });

        });
        return false;
      });

    });
  </script>

  <script type="text/javascript">


      function remove(element){
        if($('#marks_table >tbody >tr').length==1){
            $('#mark_div').remove();
            return;
        }
        $(element).parent().parent().remove();

      }
    </script>
@endsection
