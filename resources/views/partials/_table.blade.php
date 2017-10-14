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
              <a class="btn btn-info btn-sm" href="{{ route('university.show',$td->id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
              <a class="btn btn-primary btn-sm" href="{{ route('university.edit',$td->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </a>
              {!! Form::open(['method' => 'DELETE','route' => ['university.delete', $td->id],'style'=>'display:inline']) !!}
              {{ Form::button('  <i class="fa fa-trash-o" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'type' => 'submit']) }}
              {!! Form::close() !!}
          </td>
    @endforeach
    </tr>
  </tbody>

</table>