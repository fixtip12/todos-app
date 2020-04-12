@extends('layout')

@section('title','table')
@section('content')

  <table border="1">
    <tr>
      <th>{{ $test }}</th>
    </tr> 
    <tr>
        @foreach($table as $data)
      <td>{{ $data }}</td>
      @endforeach
    </tr> 
  </table>
  @endsection