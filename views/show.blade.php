@extends('layout.app')

@section('title',$task->title)

@section('content')
{{$task->description}}
@if ($task->long_description)
    <p>{{$task->long_description}}</p>
@else
    <p>Empty</p>    
@endif
<p>{{$task->created_at}}</p>
<p>{{$task->updated_at}}</p>
@endsection