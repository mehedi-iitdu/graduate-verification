@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Universities</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="/dashboard/manage_university_create" class="btn btn-block btn-primary">Add University</a>
              </div>
          </div>

          <div>
            <form>
              <div class="form-row">
                  <div class="form-group col-md-9">
                    <select class="form-control" id="location">
                      <option>Location</option>
                      <option>Dhaka</option>
                      <option>Rajshahi</option>
                      <option>Khulna</option>
                      <option>Chittagong</option>
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
                  <th>University Name</th>
                  <th>Location</th>
                  <th>Website</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>University of Dhaka</td>
                  <td>Dhaka</td>
                  <td>www.du.ac.bd</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                 <tr>
                  <th scope="row">1</th>
                  <td>University of Dhaka</td>
                  <td>Dhaka</td>
                  <td>www.du.ac.bd</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>University of Dhaka</td>
                  <td>Dhaka</td>
                  <td>www.du.ac.bd</td>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>University of Dhaka</td>
                  <td>Dhaka</td>
                  <td>www.du.ac.bd</td>
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