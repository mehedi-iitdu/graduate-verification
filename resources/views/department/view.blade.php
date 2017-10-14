@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Department</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="{{ URL::route('department.create') }}" class="btn btn-block btn-primary">Add Department</a>
              </div>
          </div>

          <div>
            <form>
              <div class="form-row">
                  <div class="form-group col-md-9">
                    <select class="form-control" id="university">
                      <option>Select University</option>
                      <option>DU</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-block btn-success">Search</button>
                  </div>
                </div>
            </form>
          </div>

          <div id="university_table">
            <table class="table table-bordered table-responsive">

              <thead>
                <tr>
                  <th>#</th>
                  <th>University Name</th>
                  <th>Department Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  <td>1</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
@endsection