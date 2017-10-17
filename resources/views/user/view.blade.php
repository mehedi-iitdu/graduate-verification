@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="text-center d-none d-sm-block">Manage Users</h2>

          <hr>

          <div class="form-row">

              <div id="user_table">

              </div>

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

          $.post("{{ URL::route('user.list') }}",{}, function(data){

              $('#user_table').html(data);
          });
      });
  </script>
@endsection