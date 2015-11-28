@extends('master')
 
@section('content')
    <h2>{{ $project->name }}</h2>
     @if ( !$project->tasks->count() )
        Your project has no tasks.
    @else
        <table border="1" width="100%">
            @foreach( $project->tasks as $task )
                <tr>
                    {!! Form::open(
                        array('class' => 'form-inline',
                         'method' => 'DELETE', 
                         'route' => array('projects.tasks.destroy', 
                         $project->slug, $task->slug))) !!}
                        <td><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></td>
                        
                        <td>{!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}</td>
 
                        <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </table>
    @endif
    <p>
        {!! link_to_route('projects.index', 'Back to Projects') !!} |
        {!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!}
    </p>
@endsection