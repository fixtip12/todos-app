@extends('layouts.layout')

@section('title','TODOS PAGE')
@section('content')

  <div class="card card-default">
    <div class="card-header">Todos</div>
      <div class="card-body">
            <ul class="list-group"style="list-style:none;">
                  @foreach($posts as $post)
                <li class="list-group-item">{{$post->name}}
                  @if(!$post->completed)<a href="{{route('completed',['id'=> $post->id])}}" class="btn btn-sm btn-info float-right">completed</a>@endif
                  <a href="{{route('show',['id'=> $post->id])}}" class="btn btn-sm btn-primary float-right mr-2">View</a>
                </li>
                @endforeach
            </ul>
       </div>
   </div>
@endsection