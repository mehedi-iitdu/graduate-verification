@if ($courses->isEmpty())
  <div class="alert alert-danger">No courses found with given information.</div>
@else
<div id='mark_div'>
<table class="table table-bordered table-responsive" id='marks_table'>
  <thead>
    <tr>
      <th>Course Name</th>
      <th>Course Code</th>
      <th>Credit</th>
      <th>GPA</th>
      <th>Remove</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($courses as $course)
      <tr>
        <td>{{ $course->name }}</td>
        <td>{{ $course->code }}</td>
        <td>{{ $course->credit }}</td>
        <td><input type="number" name="course_ids[]" hidden value="{{ $course->id }}">
        <input type="number" name="mark_{{ $course->id }}" step="0.01" required></td>
        <td><a href="javascript:void(0)" type="button" onclick ="remove(this)" id="remove">Remove</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
  
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
  
</div>
@endif
