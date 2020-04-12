@extends('layout')

@section('title','home')
@section('content')
    <h1>my{{ $foo  }} website~home~</h1>
    @foreach($tasks as $task)
        <ol>
            <li>{{ $task }}</li>
        </ol>
    @endforeach
@endsection