@extends('master')

@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
 
@section('content')
    <h2>Projects, count: {{ $projects->count() }} </h2>
 
    @if ( !$projects->count() )
        You have no projects
    @else
        <table border="1" width="100%">
            @foreach( $projects as $project )
                <tr>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                        <td><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></td>
                        
                        <td>{!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}</td>
                        <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>
@endsection
 

