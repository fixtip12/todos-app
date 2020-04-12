@extends('layouts.layout')

@section('title','TODOS PAGE')
@section('content')

  <div class="card card-default">
    <div class="card-header">Todos</div>
      <div class="card-body">
            <ul class="list-group"style="list-style:none;">
                  @foreach($posts as $post)
                <li class="list-group-item">{{$post->name}}
                <a href="{{route('show',['id'=> $post->id])}}" class="btn btn-primary float-right">View</a></li>
                @endforeach
            </ul>
       </div>
   </div>
@endsection