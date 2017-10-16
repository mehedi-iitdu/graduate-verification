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
                      <div id="university_list">
                          <select class="form-control" id="user_role">
                              <option>Select University</option>
                          </select>
                      </div>
                  </div>
                  <div class="form-group col-md-3">
                    <p class="btn btn-block btn-success" id="search">Search</p>
                  </div>
                </div>
            </form>
          </div>

          <div id="department_table">

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

                $('#search').on('click', function () {

                    var university_id = $('#university_id').val();

                    $.post("{{ URL::route('department.view') }}",{university_id:university_id}, function(data){
                        $('#department_table').html(data);
                    });
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

            var university_id = $('#university_id').val();
            $.post("{{ URL::route('department.view') }}",{university_id:university_id , page:page}, function(data){
                $("#department_table").empty().html(data);
                location.hash = page;
            });

        }
    </script>
@endsection