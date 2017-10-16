<div id='mark_div'>
<input type="number" name="permission_id" hidden value="{{ $permission_id }}">
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
    @foreach ($marks as $mark)
      
      <tr>
        <td>{{ $mark->course->name }}</td>
        <td>{{ $mark->course->code }}</td>
        <td>{{ $mark->course->credit }}</td>
        <td><input type="number" name="course_ids[]" hidden value="{{ $mark->course_id }}">
        <input type="number" name="mark_{{ $mark->course->id }}" value="{{ $mark->gpa }}" step="0.01" min="2" max="4" required></td>
        <td><a href="javascript:void(0)" onclick ="remove(this)" id="remove">Remove</a></td>
      </tr>
    @endforeach

    @foreach ($remained_courses as $course)
      <tr>

        <td>{{ $course->name }}</td>
        <td>{{ $course->code }}</td>
        <td>{{ $course->credit }}</td>
        <td><input type="number" name="course_ids[]" hidden value="{{ $course->id }}">
        <input type="number" name="mark_{{ $course->id }}" step="0.01" min="2" max="4" required></td>
        <td><a href="javascript:void(0)" onclick ="remove(this)" id="remove">Remove</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
    
    {{ Form::submit('Submit', ['class' => 'btn btn-primary', 'name' => 'editBtn']) }}

</div>

