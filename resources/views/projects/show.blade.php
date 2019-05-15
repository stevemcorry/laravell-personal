@extends('layout')

@section('content')


<div class="row justify-content-center">

    <div class="col-md-5">

        <div>
            
            <h1 class="title text-center">{{ $project->title}}</h1>
            
        </div>
        
        <div id="show">

            <div class="description">
                {{$project->description}}
            </div>


            <h2>
                Tasks:
            </h2>
            @foreach($project->tasks as $task)

                <div>

                    <!-- @if( !$task->completed )

                        <div class="checkbox">
                            Not complete
                        </div>

                    @endif

                    @if( $task->completed )

                        <div class="checkbox">
                            Complete!
                        </div>

                    @endif -->

                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf()


                        <label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : '' }}">

                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

                            {{ $task->description }}

                        </label>
                    </form>

                </div>



            @endforeach
            
            <a class="edit" href="/projects/{{ $project->id }}/edit">Edit</a>
            
        </div>
        
    </div>
    
</div>

@endsection


@section('title')

    Show
    
@endsection