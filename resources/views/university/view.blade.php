@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Universities</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="{{ URL::route('university.create') }}" class="btn btn-block btn-primary">Add University</a>
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
                      <option>Barisal</option>
                    </select>
                  </div>
                  <div class="form-group col-md-3">
                    <button type="submit" class="btn btn-block btn-success">Search</button>
                  </div>
                </div>
            </form>
          </div>

          <div id="university_table">
  
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

          $.post("{{ URL::route('university.universityListByLocation') }}",{location:'Dhaka'}, function(data){
              $('#university_table').html(data);
          });

        });
</script>


@endsection