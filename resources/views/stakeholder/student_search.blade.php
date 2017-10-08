@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Search Student</h2>

          <div class="jumbotron">
            <form>

              <div class="form-group row">                
                <label for="Student" class="col-sm-6 col-form-label"><h4>Student Credentials</h4></label>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-6 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
                </div>
              </div>

              <div class="form-group row">
                <label for="department" class="col-sm-6 col-form-label">Registration Number</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="department" placeholder="2013-000-111">
                </div>
              </div>

              <div class="form-group row">
                <label for="name" class="col-sm-6 col-form-label">Student Date of Birth</label>
                <div class='input-group date col-sm-6'>
                    <input type='text' class="form-control" placeholder="1971-12-16" id='birthdate'/>
                    <!-- <span class="input-group-addon">
                        <span class="fa fa-calendar-o red-icon"></span>
                    </span> -->
                </div>
              </div>

              <div class="form-group row">
                <label for="organization" class="col-sm-6 col-form-label">University Name</label>
                <div class="col-sm-6">
                  <select class="form-control" id="university_name">
                    <option selected="true" disabled="disabled">Select University</option>
                    <option>DU</option>
                    <option>JU</option>
                    <option>NSU</option>
                    <option>PO</option>
                    <option>DEO</option>
                  </select>
                </div>
              </div>


              <div class="form-group">
                <div align="right">
                  <button type="submit" class="btn btn-success">Search</button>
                </div>
              </div>
            </form>
          </div>
        </main>
      </div>   
    </div>

@endsection


@section('script')

<script type="text/javascript">

  $(function () {
    $('#birthdate').datepicker({});
  });

  </script>


@endsection
