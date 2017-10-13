@extends('layouts.app')

@section('content')

    <div class="container-fluid">

      <div class="row">

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 40px" class="d-none d-sm-block">Add Department</h2>
            <div class="jumbotron">
              @include('partials._error_message')
              {!! Form::open(array('route' => 'department.create')) !!}
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4"><label for="department_name">Department Name</label></div>
                    <div class="col-md-8"><input class="form-control" required="" name="department_name" type="text" id="department_name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4"><label for="university">University</label></div>
                    <div class="col-md-8">
                        <div id="university_list">



                        </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4"><label for="semesters">Number of Semesters</label></div>
                    <div class="col-md-8">
                      <select class="form-control" required="" id="semesters" name="semesters">
                        <option selected="selected" value="">Select Number of Semesters</option>
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
                </div>
                {{ Form::submit('Add', ['class' => 'btn btn-block btn-primary']) }}

                {!! Form::close() !!}
            </div>

        </main>
      </div>
    </div>
@endsection

@section('script')

<script type="text/javascript">
      $(document).ready(function(){
          $.ajaxSetup({
              headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
          });

          $.post("{{ URL::route('university.list') }}",{},function(data){
            $('#university_list').html(data);
          });

        });
</script>

@endsection
