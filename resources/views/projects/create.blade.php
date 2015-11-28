@extends('welcome')
 
@section('content')
    <h2>Create Project</h2>
 
	@if($errors->any())
    	<div class="alert alert-danger">
        	@foreach($errors->all() as $error)
            	<p>{{ $error }}</p>
        	@endforeach
    	</div>
	@endif

    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection
