
@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
                <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Courses</h2>

                <hr>

                <div class="form-row">
                    <div class="form-group ml-auto col-md-3">
                        <a href="/course/create" class="btn btn-block btn-primary">Add Course</a>
                    </div>
                </div>

                <div>
                    <form>

                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <div id="university_list">
                                    <select class="form-control" id="university_id">
                                        <option>Select University</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <div id="department_list">
                                    <select class="form-control" id="department_id">
                                        <option>Select Department</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div id="semester_list">
                                    <select class="form-control" id="semester_no">
                                        <option>Select Semester</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-3">
                                <p class="btn btn-block btn-success" id="search">Search</p>
                            </div>
                        </div>
                    </form>
                    <div id="course_table">
                    </div>
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

        $('#search').on('click', function () {

            var university_id = $('#university_id').val();
            var department_id = $('#department_id').val();
            var semester_no = $('#semester_no').val();

            $.post("{{ URL::route('course.getCourseListByUniversityDeparmentSemester') }}",
                {university_id:university_id, department_id:department_id, semester_no: semester_no }, function(data){
                $('#course_table').html(data);
            });
        });

        $.post("{{ URL::route('university.list') }}",{},function(data){
            $('#university_list').html(data);

            $('#university_id').on('change', function(){


                var university_id = $(this).val();
                    
                $.post("{{ URL::route('department.list') }}",{university_id:university_id}, function(data){
                      $('#department_list').html(data);

                      $('#department_id').on('change', function(){

                          var department_id = $(this).val();
                              
                          $.post("{{ URL::route('department.semesterList') }}",{department_id:department_id}, function(data){
                                $('#semester_list').html(data);
                                
                          })

                      });

                })

            });

        });

    });
</script>

@endsection