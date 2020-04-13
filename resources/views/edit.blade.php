@extends('layouts.layout')

@section('title','Edit Todos')
@section('content')
@section('card','edit todo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('update',['id'=>$post->id])}}" method="POST">
 {{ csrf_field() }}
  @include('layouts.form')
</form>
@endsection