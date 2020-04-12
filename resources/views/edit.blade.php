@extends('layouts.layout')

@section('title','Edit Todos')
@section('content')
@section('card','edit todo')
<form action="{{route('update',['id'=>$post->id])}}" method="POST">
 {{ csrf_field() }}
  @include('layouts.form')
</form>
@endsection