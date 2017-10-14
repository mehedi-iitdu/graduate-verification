@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Add University</h2>

          <hr>

          <div class="jumbotron">
            @include('partials._error_message')
            {!! Form::open(array('route' => 'university.create')) !!}
              <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">University Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" placeholder="Name" name="university_name" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="university_location" class="col-sm-4 col-form-label">Location</label>
                <div class="col-sm-8">
                  <select class="form-control" id="university_location" name="university_location">
                    <option value="">Select Location</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Sylhet">Sylhet</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="university_website">Website</label>
                 <div class="col-sm-8">
                  <input type="text" class="form-control" id="university_website" placeholder="Website" name="university_website" required>
                </div>
                </div>
              {{ Form::hidden('url',URL::previous()) }}
              {{ Form::submit('Add', ['class' => 'btn btn-block btn-primary']) }}

              {!! Form::close() !!}
          </div>
        </main>
      </div>
    </div>
@endsection
