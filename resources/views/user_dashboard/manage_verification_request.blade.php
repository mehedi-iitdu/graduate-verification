@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Request to verify</h2>

          <div class="jumbotron">
            <form>

              <div class="form-group row">
                <label for="stakeholder" class="col-sm-6 col-form-label"><h3>Stackholder Information</h3></label>
                
                <label for="Student" class="col-sm-6 col-form-label"><h3>Student Information</h3></label>
              </div>

              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <label for="university" class="col-sm-2 col-form-label">University</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="university" placeholder="Department Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="organization" class="col-sm-2 col-form-label">Univ./Company</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="organization" placeholder="Name">
                </div>
                <label for="department" class="col-sm-2 col-form-label">Department</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="department" placeholder="Department Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="designation" placeholder="Program Officer">
                </div>
                <label for="registartion" class="col-sm-2 col-form-label">Registartion</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="registartion" placeholder="Registartion Year">
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
                </div>
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="country" class="col-sm-2 col-form-label">Country</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="country" placeholder="Bangladesh">
                </div>
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="email" placeholder="example@gmail.com">
                </div>
              </div>

              <div class="form-group">
                <div align="center">
                  <button type="submit" class="btn btn-success">Request</button>
                </div>
              </div>
            </form>
          </div>
        </main>
      </div>   
    </div>
@endsection