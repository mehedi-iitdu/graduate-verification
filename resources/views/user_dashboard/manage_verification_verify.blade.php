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
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Manage Verification</h2>

          <div class="jumbotron">
            <form>
              <div class="form-row">
                  <div class="form-group col-sm-8">
                    <select class="form-control" id="user_role">
                      <option>Select University</option>
                      <option>DU</option>
                      <option>JU</option>
                      <option>NSU</option>
                      <option>PO</option>
                      <option>DEO</option>
                    </select>
                  </div>
                </div>
            </form>
          </div>

          <div>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Department</th>
                  <th>Registration</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>IIT</td>
                  <td>yyyy-xxx-zzz</td>
                  <td>Someone</td>
                  <td>Pass</td>
                  <td>Graduate</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>IIT</td>
                  <td>yyyy-xxx-zzz</td>
                  <td>Someone</td>
                  <td>Pass</td>
                  <td>Graduate</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>IIT</td>
                  <td>yyyy-xxx-zzz</td>
                  <td>Someone</td>
                  <td>Pass</td>
                  <td>Graduate</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>IIT</td>
                  <td>yyyy-xxx-zzz</td>
                  <td>Someone</td>
                  <td>Pass</td>
                  <td>Graduate</td>
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