@extends('layouts.layout')
@section('content')

@section('title',$post->name)
@section('content')
     <div class="card card-default">
        <div class="card-header">Details</div>
          <div class="card-body">
              {{$post->description}}
           </div>
      </div>
    <a class="btn btn-primary text-white" href="{{route('edit',['id'=>$post->id])}}">Edit</a>
     <form method="post" action="{{route('delete',['id'=>$post->id])}}">
      {{ csrf_field() }}
      <button class="btn btn-danger text-white">Delete</button>
     </form>
  </div>

@endsection