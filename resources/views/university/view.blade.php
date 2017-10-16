@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
          <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Universities</h2>

          <hr>

          <div class="form-row">
              <div class="form-group ml-auto col-md-3">
                  <a href="{{ URL::route('university.create') }}" class="btn btn-block btn-primary">Add University  </a>
              </div>
          </div>

          <div>
            <form>
              <div class="form-row">
                  <div class="form-group col-md-9">
                    <select class="form-control" id="location">
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
                  <div class="form-group col-md-3">
                    <p class="btn btn-block btn-success" id="search">Search</p>
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


          $('#search').on('click', function () {

              var location = $('#location').val();

              $.post("{{ URL::route('university.universityListByLocation') }}",{location:location}, function(data){
                  $('#university_table').html(data);
              });
          });


      });

      $(window).on('hashchange', function() {
          if (window.location.hash) {
              var page = window.location.hash.replace('#', '');
              if (page == Number.NaN || page <= 0) {
                  return false;
              }else{
                  getData(page);
              }
          }
      });

      $(document).ready(function()
      {
          $(document).on('click', '.pagination a',function(event)
          {
              $('li').removeClass('active');
              $(this).parent('li').addClass('active');
              event.preventDefault();

              var myurl = $(this).attr('href');
              var page=$(this).attr('href').split('page=')[1];

              getData(page);

          });
      });

      function getData(page){
          $.post("{{ URL::route('university.universityListByLocation') }}",{location:'Dhaka' , page:page}, function(data){
              $("#university_table").empty().html(data);
              location.hash = page;
          });

      }
</script>


@endsection