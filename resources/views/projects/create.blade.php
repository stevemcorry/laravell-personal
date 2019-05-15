@extends('layout')

@section('content')


<h1>Create a new Project</h1>

<div>

    <form method="POST" action="/projects">

        {{ csrf_field() }}

        <div>

            <input type="text" name="title" placeholder="Title" required>

        </div>

        <div>

            <textarea name="description" id="" cols="30" rows="10" placeholder="Description"></textarea>

        </div>

        <div>

            <button type="submit">Create Project</button>

        </div>

    </form>

</div>

<ul class="notification is-danger">
    
    @foreach ($errors->all() as $error)

        <li>{{ $error }}</li>

    @endforeach

</ul>

    

@endsection


@section('title')

    Create
    
@endsection