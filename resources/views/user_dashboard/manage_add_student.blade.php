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
                    <div class="col-md-10"><input class="form-control" required="" name="first_name" type="text" id="first_name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="last_name">Last Name</label></div>
                    <div class="col-md-10"><input class="form-control" required="" name="last_name" type="text" id="last_name">
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
                    <div class="col-md-2"><label for="mobile_no">Mobile No.</label></div>
                    <div class="col-md-10"><input class="form-control" required="" name="mobile_no" type="text" id="mobile_no">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="university_id">University</label></div>
                    <div class="col-md-10">
                        <div id="university_list">

                            <select class="form-control" id="university_id">
                                <option>Select University</option>
                            </select>
                          
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

                <div class="form-group row">
                  <div class="col-sm-12" align="right">
                    <button type="submit" class="btn btn-primary">Add</button>
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