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
              <div class="form-row">
                  <div class="form-group col-md-3">
                    <select class="form-control" id="university_name">
                      <option>University Name</option>
                      <option>DU</option>
                      <option>JU</option>
                      <option>NSU</option>
                      <option>PO</option>
                      <option>DEO</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="department">
                      <option>Department/Institute</option>
                      <option>IIT</option>
                      <option>EEE</option>
                      <option>Botany</option>
                      <option>Zoology</option>
                      <option>Geology</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="semester">
                      <option>Semester</option>
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
                  <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-success">Search</button>
                    <button type="submit" class="btn btn-primary">Add Course</button>
                  </div>
                </div>
            </form>
          </div>

          <div>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>University</th>
                  <th>Dept./Inst.</th>
                  <th>Semester No.</th>
                  <th>Course Name</th>
                  <th>Course Code</th>
                  <th>Course Credit</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">DU</th>
                  <td>IIT</td>
                  <td>6</td>
                  <td>Java</td>
                  <td>SE602</td>
                  <td>3</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <th scope="row">DU</th>
                  <td>IIT</td>
                  <td>6</td>
                  <td>Java</td>
                  <td>SE602</td>
                  <td>3</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <th scope="row">DU</th>
                  <td>IIT</td>
                  <td>6</td>
                  <td>Java</td>
                  <td>SE602</td>
                  <td>3</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <th scope="row">DU</th>
                  <td>IIT</td>
                  <td>6</td>
                  <td>Java</td>
                  <td>SE602</td>
                  <td>3</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <th scope="row">DU</th>
                  <td>IIT</td>
                  <td>6</td>
                  <td>Java</td>
                  <td>SE602</td>
                  <td>3</td>
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

