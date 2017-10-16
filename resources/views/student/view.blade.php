@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Student</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="{{ URL::route('student.create') }}" class="btn btn-block btn-primary">Add Student</a>
              </div>
          </div>

          <div>
            <form>
              <div class="form-row">
                  <div class="form-group col-md-4">
                    <div id="university_list">
                      
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <div id="department_list">
                      
                    </div>
                  </div>

                  <div class="form-group col-md-4">
                    <p class="btn btn-block btn-success" id="search">Search</p>
                  </div>
                </div>
            </form>
          </div>

          <div id="student_table">

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

        $.post("{{ URL::route('university.list') }}",{},function(data){
            $('#university_list').html(data);

            $('#university_id').on('change', function(){


                var university_id = $(this).val();
                    
                $.post("{{ URL::route('department.list') }}",{university_id:university_id}, function(data){
                      $('#department_list').html(data);

                    $('#search').on('click', function () {
                        var university_id = $('#university_id').val();
                        var department_id = $('#department_id').val();

                        $.post("{{ URL::route('student.list') }}",{university_id:university_id, department_id:department_id}, function(data){

                            $('#student_table').html(data);
                        });
                    });

                })

            });

        });


    });

</script>

@endsection