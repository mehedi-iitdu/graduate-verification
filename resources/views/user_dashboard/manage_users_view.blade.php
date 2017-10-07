@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="text-center d-none d-sm-block">Manage Users</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="/dashboard/manage_users_create" class="btn btn-block btn-primary">Add User</a>
              </div>
          </div>

          <div>
            <form>
              <div class="form-row">
                  <div class="form-group col-md-3">
                    <select class="form-control mdb-select" id="user_role">
                      <option>Select User Role</option>
                      <option>DU</option>
                      <option>JU</option>
                      <option>NSU</option>
                      <option>PO</option>
                      <option>DEO</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control mdb-select" id="user_role">
                      <option>Select University</option>
                      <option>DU</option>
                      <option>JU</option>
                      <option>NSU</option>
                      <option>PO</option>
                      <option>DEO</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <select class="form-control" id="user_role">
                      <option>Select Department</option>
                      <option>DU</option>
                      <option>JU</option>
                      <option>NSU</option>
                      <option>PO</option>
                      <option>DEO</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-block btn-success">Search</button>
                  </div>
                </div>
            </form>
          </div>

          <div>
            <table class="table table-bordered table-responsive">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Role</th>
                  <th>Name</th>
                  <th>University</th>
                  <th>Department</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>UGC</td>
                  <td>Otto</td>
                  <td>DU</td>
                  <td>IIT</td>
                  <td>example@gmail.com</td>
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