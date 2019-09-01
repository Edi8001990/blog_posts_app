@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

        @if(count($posts) > 1)
            @foreach ($posts as $post)
                <div class="list-group">
                    <h3>{{$post->title}}</h3>
                    <p>{{$post->body}}</p>
                <small>Writen on {{$post->created_at}}</small>
                </div>
            @endforeach
    @else
    <p>No Post Found</p>
    @endif


@endsection