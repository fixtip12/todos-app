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
    <a class="btn btn-info btn-sm my-2 text-white" href="{{route('edit',['id'=>$post->id])}}">Edit</a>
    <a class="btn btn-danger btn-sm my-2 text-white" href="{{route('delete',['id'=>$post->id])}}">Delete</a>
     </form>
  </div>

@endsection