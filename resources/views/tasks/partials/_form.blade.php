<div style="width:450px; ">
	<div class="form-group">
    	{!! Form::label('name', 'Name:') !!}
    	{!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Task Name')) !!}
	</div>
 
	<div class="form-group">
    	{!! Form::label('slug', 'Slug:') !!}
    	{!! Form::text('slug', null, array('class' => 'form-control', 'placeholder' => 'Slug')) !!}
	</div>
 
	<div class="form-group">
    	{!! Form::label('completed', 'Completed:') !!}
    	{!! Form::checkbox('completed') !!}
	</div>
 
	<div class="form-group">
    	{!! Form::label('description', 'Description:') !!}
    	{!! Form::textarea('description', null, array('class' => 'form-control', 'placeholder' => 'Enter Task Description Here...')) !!}
	</div>
 
	<div class="form-group">
    	{!! Form::submit($submit_text) !!}
	</div>
</div>