@extends('layouts.app')

@section('content')

    <div class="container-fluid">

      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add Student</h2>
            <div class="jumbotron">

              @include('partials._error_message')
              {!! Form::open(array('route' => 'student.store')) !!}
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="first_name">First Name</label></div>
                    <div class="col-md-10"><input class="form-control" required="" name="first_name" type="text" id="first_name" pattern="([a-z]*[A-Z]*)*">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="last_name">Last Name</label></div>
                    <div class="col-md-10"><input class="form-control" required="" name="last_name" type="text" id="last_name" pattern="([a-z]*[A-Z]*)*">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="email">Email</label></div>
                    <div class="col-md-10"><input class="form-control" required="" name="email" type="email" id="email">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2"><label for="date_of_birth">Date of Birth</label></div>
                        <div class="col-md-10"><input class="form-control" required="" name="date_of_birth" type="text" id="date_of_birth">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="mobile_no">Mobile No.</label></div>
                    <div class="col-md-10"><input class="form-control" required="" name="mobile_no" type="text" id="mobile_no" pattern="01[0-9]{9}">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="university">University</label></div>
                    <div class="col-md-10">
                        <div id="university_list">

                      
                          
                        </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="department">Department</label></div>
                    <div class="col-md-10">
                      <div id="department_list">
                        
                        <select class="form-control" id="user_role">
                            <option>Select Department</option>
                        </select>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2"><label for="registration_no">Registration No.</label></div>
                        <div class="col-md-10"><input class="form-control" required="" name="registration_no" type="text" id="registration_no" placeholder="2013-121-121"
                                                      pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2"><label for="session_no">Session</label></div>
                        <div class="col-md-10"><input class="form-control" required="" name="session_no" type="text" id="session_no" pattern="[0-9]{4}-[0-9]{2}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
                
              {!! Form::open(array('route' => 'student.store')) !!}
            
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

          $(function () {
              $('#date_of_birth').datepicker({ changeYear: true, changeMonth:true, yearRange: "1980:"+new Date().getFullYear() });
          });


          $.post("{{ URL::route('university.list') }}",{},function(data){
            $('#university_list').html(data);
            departmentList();
          });

          function departmentList(){
            $('#university_id').on('change', function(){
                var university_id = $('#university_id option:selected').val();
                $.post("{{ URL::route('department.list') }}",{university_id:university_id},function(data){
                  $('#department_list').html(data);
                });
            });
          }

        });
</script>


@endsection