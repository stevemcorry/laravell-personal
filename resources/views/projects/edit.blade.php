@extends('layout')

@section('content')


<div class="container" id="edit">
    <div class="row justify-content-center">
        <div class="text-center col-md-5">

        <h1 class="title">Edit your Project!</h1>

            <form id="form1" method="POST" action="/projects/{{ $project->id }}">

                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div>

                    <input type="text" 
                        name="title" 
                        class="form-control"
                        placeholder="Title" 
                        value="{{ $project->title }}">

                </div>

                <div>

                    <textarea name="description" 
                        type="text"
                        class="form-control"
                        placeholder="Description">{{ $project->description }}</textarea>

                </div>

            </form>

            <form id="form2" method="POST" action="/projects/{{ $project->id }}">

                {{ csrf_field() }}

                @method('DELETE')

            </form>

            <div class="row">

                <div class="col">

                    <button form="form1" type="submit" class="btn btn-primary">Save Project</button>

                </div>

                <div class="col">

                    <button form="form2" type="submit" class="btn btn-danger">Delete Project</button>

                </div>

            </div>


        </div>
    </div>
</div>


    

@endsection


@section('title')

    Edit
    
@endsection