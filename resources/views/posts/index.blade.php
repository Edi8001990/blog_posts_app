@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

        @if(count($posts) > 1)
            @foreach ($posts as $post)
                <div class="list-group">
                        <div class="card-header">
                             <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        </div>
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$post->body}}
                <p><small>Writen on {{$post->created_at}}</small></li></p>
                </div>
            </ul>
            @endforeach
    @else
    <p>No Post Found</p>
    @endif


@endsection