@extends('layouts.app')

@section('content')
    <h1 class="text-center">Posts</h1>

        @if(count($posts) > 0)
            @foreach ($posts as $post)
            <div class="all-posts-list-container">
            <ul class="list-group">
                <div class="well">
                        
                            <div class="row all-posts-list">
                                <div class="col-md-4 col-sm-4">
                                    <img style="width:35%" src="/storage/cover_images/{{$post->cover_image}}">
                                </div>

                                <div class="col-md-8 col-sm-8">
                                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                        <small>Writen on {{$post->created_at}} by {{$post->user->name}}</small>
                                </div>
                            </div>
                            
                        
                        
                               
                                
                </div>
            </div>
            @endforeach
            {{$posts->links()}}
    @else
    <h1 class="display-1 text-center">No posts found</h1>
    @endif


@endsection