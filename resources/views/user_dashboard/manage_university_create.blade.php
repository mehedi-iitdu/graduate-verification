@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Add University</h2>

          <hr>

          <div class="jumbotron">
            <form>
              <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">University Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Location</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" placeholder="Location">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="user_role">Website</label>
                 <div class="col-sm-8">
                  <input type="text" class="form-control" id="website" placeholder="Website">
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