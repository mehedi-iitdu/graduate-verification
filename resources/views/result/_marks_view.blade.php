@if ($marks->isEmpty())
  <div class="alert alert-danger">No result found with given information.</div>
@else

<table class="table table-bordered table-responsive" id='marks_table'>
  <thead>
    <tr>
      <th>Course Name</th>
      <th>Course Code</th>
      <th>Credit</th>
      <th>GPA</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($marks as $mark)
      <tr>
        <td>{{ $mark->course->name }}</td>
        <td>{{ $mark->course->code }}</td>
        <td class="credit">{{ $mark->course->credit }}</td>
        <td class="gpa">{{ $mark->gpa }}</td>
      </tr>
    @endforeach
  </tbody>
</table>

@endif
