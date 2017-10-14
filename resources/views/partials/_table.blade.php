<table class="table table-bordered table-responsive">

  <thead>
    <tr>
      <th>#</th>
      {{$serial = 0}}
      @foreach ($theads as $thead)
          <th>{{ $thead }}</th>
          {{$serial++}
      @endforeach
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    {{$serial = 0}}
    @foreach ($tds as $td)
      <tr>
        <th scope="row">{{$serial+1}}</th>
        <td>{{ $td->name }}</th>
        {{$serial++}}
    @endforeach
    <td>
        <button class="btn btn-primary">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
  </tbody>

</table>