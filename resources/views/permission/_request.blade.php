
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Request a permission </h4>
      </div>
      {{ Form::open(array('route' => 'permission.request')) }}
        <div class="modal-body">
            <div class="form-group" id="permission" >
				<input hidden type="number" name="student_id" value="{{$student_id}}">
				<input hidden type="number" name="semester_no" value="{{$semester_no}}">
				<textarea name="message" class="form-control" placeholder="Write a message..." required></textarea>
			</div> 	
        </div>
        
        <div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          {{ Form::submit('Send request',['class' => 'btn btn-primary']) }}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
