@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Manage Users</a>
            </li>
            <li class="nav-item">
              <div class="dropdown show">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manage Universities
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">University</a>
                  <a class="dropdown-item" href="#">Department/Institute</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <div class="dropdown show">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manage Department/Institute
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Semester</a>
                  <a class="dropdown-item" href="#">Course</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <div class="dropdown show">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manage Result
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Add Result</a>
                  <a class="dropdown-item" href="#">Edit</a>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <div class="dropdown show">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manage Verification
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Request</a>
                  <a class="dropdown-item" href="#">Verify</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>

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