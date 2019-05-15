@extends('layout')

@section('content')

<h1>
    WELOME TO MY CRIB
</h1>

<h3>Things i like to do:</h3>

@foreach($tasks as $task)

    <li>
        {{ $task }}
    </li>
@endforeach



@endsection