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
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Manage Courses</h2>

          <div class="jumbotron">
            <form>
              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="university">University</label>
                <div class="col-sm-8">
                  <select class="form-control" id="university">
                    <option>DU</option>
                    <option>JU</option>
                    <option>JNU</option>
                    <option>NSU</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="department">Department/Institue</label>
                <div class="col-sm-8">
                  <select class="form-control" id="department">
                    <option>IIT</option>
                    <option>Biology</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="semester">Semester/Year</label>
                <div class="col-sm-8">
                  <select class="form-control" id="semester">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="course_name" class="col-sm-4 col-form-label">Course Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="course_name" placeholder="Course Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="course_code" class="col-sm-4 col-form-label">Course Code</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="course_code" placeholder="Course Code">
                </div>
              </div>

              <div class="form-group row">
                <label for="course_credit" class="col-sm-4 col-form-label">Course Credit</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="course_credit" placeholder="Course Credit">
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