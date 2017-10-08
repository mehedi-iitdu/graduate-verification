@extends('layouts.app')

@section('content')

    <div class="container-fluid">

      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add Student</h2>
            <div class="jumbotron">
              <form>
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
                    <div class="col-md-2"><label for="university">University</label></div>
                    <div class="col-md-10">
                      <select class="form-control" required="" id="university" name="university">
                        <option selected="selected" value="">Select University</option>
                        <option>DU</option>
                        <option>JU</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2"><label for="department">Department</label></div>
                    <div class="col-md-10">
                      <select class="form-control" required="" id="department" name="department">
                        <option selected="selected" value="">Select Department</option>
                        <option>IIT</option>
                        <option>Physics</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-12" align="right">
                    <button type="submit" class="btn btn-primary">Add</button>
                  </div>
                </div>
              </form>
            </div>

        </main>
      </div>
    </div>
@endsection