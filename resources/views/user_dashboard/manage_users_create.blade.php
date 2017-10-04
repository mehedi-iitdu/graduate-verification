@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add User</h2>

          <div class="jumbotron">
            <form>
              <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="user_role">Select User Role</label>
                <div class="col-sm-8">
                  <select class="form-control" id="user_role">
                    <option>UGC</option>
                    <option>Register</option>
                    <option>Student</option>
                    <option>PO</option>
                    <option>DEO</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="user_role">Select University</label>
                <div class="col-sm-8">
                  <select class="form-control" id="user_role">
                    <option>DU</option>
                    <option>JU</option>
                    <option>NSU</option>
                    <option>PO</option>
                    <option>DEO</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="user_role">Select Department</label>
                <div class="col-sm-8">
                  <select class="form-control" id="user_role">
                    <option>IIT</option>
                    <option>Biology</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <div align="right">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </main>
      </div>
    </div>
@endsection