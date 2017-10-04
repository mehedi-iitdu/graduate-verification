@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Add Result</h2>

          <hr>

          <div class="jumbotron">
            <form>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="university">Select University</label>
                <div class="col-sm-8">
                  <select class="form-control" id="university">
                    <option>DU</option>
                    <option>JU</option>
                    <option>NSU</option>
                    <option>PO</option>
                    <option>DEO</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="department">Select Department</label>
                <div class="col-sm-8">
                  <select class="form-control" id="department">
                    <option>IIT</option>
                    <option>Biology</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="semester">Select Semester</label>
                <div class="col-sm-8">
                  <select class="form-control" id="semester">
                    <option>1st</option>
                    <option>2nd</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="reg_id" class="col-sm-4 col-form-label">Student Registraion Id</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="reg_id" placeholder="Registration">
                </div>
              </div>


              <div class="form-group">
                <div align="right">
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>

          <div>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Course Name</th>
                  <th>course Code</th>
                  <th>Credit</th>
                  <th>GPA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Data Science</td>
                  <td>CSE-803</td>
                  <td>3</td>
                  <td>3.6</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Data Science</td>
                  <td>CSE-803</td>
                  <td>3</td>
                  <td>3.6</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Data Science</td>
                  <td>CSE-803</td>
                  <td>3</td>
                  <td>3.6</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
@endsection