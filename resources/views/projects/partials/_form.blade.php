<div style="width:400px; ">
	<div class="form-group">
	    {!! Form::label('name', 'Project Name:') !!}
    	{!! Form::text('name', null, array('class' => 'form-control', 'placeholder' => 'Project Name')) !!}
	</div>
	<div class="form-group">
    	{!! Form::label('slug', 'Slug:') !!}
    	{!! Form::text('slug', null, array('class' => 'form-control', 'placeholder' => 'Slug')) !!}
	</div>
	<div class="form-group">
    	{!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
	</div>
</div>