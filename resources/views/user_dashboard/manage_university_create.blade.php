@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Add University</h2>

          <hr>

          <div class="jumbotron">
            @include('partials._error_message')
            {!! Form::open(array('route' => 'university.add')) !!}
              <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">University Name</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="name" placeholder="Name" name="university_name" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="university_location" class="col-sm-4 col-form-label">Location</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="university_location" placeholder="Location" name="university_location" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-4 col-form-label" for="university_website">Website</label>
                 <div class="col-sm-8">
                  <input type="text" class="form-control" id="university_website" placeholder="Website" name="university_website" required>
                </div>
                </div>

              {{ Form::submit('Add', ['class' => 'btn btn-block btn-primary']) }}

              {!! Form::close() !!}
          </div>
        </main>
      </div>
    </div>
@endsection
