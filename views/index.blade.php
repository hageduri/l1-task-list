@extends('layout.app')


@section('title','The list of tasks')

{{-- <div>
    @if ($tasks)
        <div>There are tasks!</div>
    @else
        <div>There are no tasks!</div>
    @endif
</div> --}}

{{-- <div>
    @foreach ($tasks as $tasks)
        <div>{{$tasks->title}}</div>
    @endforeach
</div> --}}

{{-- <div>
    @forelse ($tasks as $tasks)
    <div>{{$tasks->title}}</div>
    @empty
    <div>There are no tasks!</div>
    @endforelse
</div> --}}

@section('content')
    @forelse ($tasks as $tasks)
    <div>
        <a href="{{ route('tasks.show',['id'=>$tasks->id])}}">{{$tasks->title}}</a>
    </div>
    @empty
    <div>There are no tasks!</div>
    @endforelse
@endsection