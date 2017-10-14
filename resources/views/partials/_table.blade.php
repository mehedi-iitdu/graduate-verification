<table class="table table-bordered table-responsive">

  <thead>
    <tr>
      <th>#</th>
      @foreach ($theads as $thead)
          <th>{{ $thead }}</th>
      @endforeach
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($tds as $index => $td)
      <tr>
        <th scope="row">{{$index+1}}</th>
        @foreach ($properties as $property)
          <td>{{ $td -> $property }}</td>
        @endforeach
        <td>
            <button class="btn btn-primary">Edit</button>
            <button class="btn btn-danger">Delete</button>
          </td>
    @endforeach
    </tr>
  </tbody>

</table>