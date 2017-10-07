@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="text-center d-none d-sm-block">Manage Users</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="/dashboard/manage_users_create" class="btn btn-block btn-primary">Add User</a>
              </div>
          </div>

          <div>
            <form>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-2">{{ Form::label('role_id', 'Role') }}</div>
                  <div class="col-md-10">{{ Form::select('role_id', $roles, null, ['class' => 'form-control', 'required', 'id' => 'role_id', 'placeholder' => 'Select Role']) }}
                  </div>
                </div>
              </div>

              <div id="role_info">

              </div>

              <div class="form-group" align="center">
                <button id="user_search" class="btn btn-block btn-success col-md-3">Search</button>
              </div>
            </form>
          </div>

          <div>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Role</th>
                  <th>Name</th>
                  <th>University</th>
                  <th>Department</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
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

          $('#user_search').on('click', function (){

              var role_name = $('#role_id option:selected').text();
              var university_id = $('#university_id').val();
              var department_id = $('#department_id').val();

              $.post("{{ URL::route('user.list') }}",{role_name:role_name, university_id:university_id, department_id:department_id}, function(data){
                  alert(data);
              });
          });

          $('#role_id').on('change', function(){

              var role_name = $('#role_id option:selected').text();

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