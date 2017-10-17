

{{ Form::open(array('route' => 'permission.request', 'method' => 'POST', 'id' => 'popupFrm')) }}
  
  <div class="modal-body">
      <div class="form-group" id="permission" >
      	<input hidden type="number" name="student_id" value="{{$student_id}}">
      	<input hidden type="number" name="semester_no" value="{{$semester_no}}">
      	<b>Request for permission </b>
        <textarea name="message" class="form-control" placeholder="Write a message..." required></textarea>
      </div> 	
  </div>
  
  <div class="modal-footer">
  	<button type="button" class="btn btn-default" onclick="div_hide()" >Cancel</button>
    {{ Form::submit('Send request',['class' => 'btn btn-primary']) }}
  </div>
{!! Form::close() !!}

