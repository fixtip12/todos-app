@extends('layouts.layout')

@section('title','Create Todos')
@section('content')
@section('card','create new')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('store')}}" method="POST">
 {{ csrf_field() }}
  @include('layouts.form')
</form>
@endsection