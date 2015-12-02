@extends('master')
 
@section('content')
    <h2>Projects, count: {{ $projects->count() }} </h2>
 
    @if ( !$projects->count() )
        You have no projects
    @else
        <table class="table" border="0" width="100%">
            <tr class="info"><td>#</td><td>Project</td><td>Edit</td><td>Delete</td></tr>
            <?php $i=0; ?>
            @foreach( $projects as $project )
                <tr>
                    <td><?php $i++; echo $i; ?></td>
                    {!! Form::open(array(
                            'class' => 'form-inline', 
                            'method' => 'DELETE', 
                            'id' => 'frmDelete-' . $project->id,
                            'route' => array('projects.destroy', $project->slug))) 
                    !!}
                    <td><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></td>
                        
                    <td>{!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}</td>
                    <td>
                        {!! 
                            Form::button(
                                'Delete', 
                                array('class'        => 'btn btn-danger', 
                                       'data-toggle'  => 'modal',
                                       'data-target'  => '#confirmDelete', 
                                       'data-title'   => 'Delete Project',
                                       'id'           => $project->id ,
                                       'data-message' => 'Are you sure you want to delete this project ?'
                                )) 
                        !!}
                    </td>
                        
                    {!! Form::close() !!}
                </tr>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('projects.create', 'Create Project', '', array('class' => 'btn btn-info')) !!}
    </p>
@endsection
 

