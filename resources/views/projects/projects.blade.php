@extends('layout')

@section('content')

<div class="jumbotron">
    <h1 class="text-center">
        Projects
    </h1>
</div>

<div class="container">
    <div class="row">
        @foreach ($projects as $project)
            
            <div class="col-md-4 project text-center">

                <a href="/projects/{{ $project->id }}">{{ $project->title }}</a>

                <!-- <strong>Title: </strong>{{ $project->title }}
                
                <br>

                <strong>Description: </strong> {{ $project->description }}


                <form method="GET" action="/projects/{{ $project->id }}/edit">

                    {{ csrf_field() }}

                    <input hidden type="text" name="title" placeholder="Title" >

                    <div>

                        <button type="submit">Edit Project</button>

                    </div>

                </form> -->

            </div>

        @endforeach

    </div>
</div>

<div class="text-center">

    <a class="btn btn-primary" href="/projects/create">Create a new project</a>
    
</div>

@endsection


@section('title')

    Projects
    

@endsection