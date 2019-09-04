@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go back</a>
        <div class="card-header">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>
            <img style="width:40%" src="/storage/cover_images/{{$post->cover_image}}">

        
    <ul class="list-group list-group-flush">
            <li class="list-group-item">{!!$post->body!!}
                        <p><small>Writen on {{$post->created_at}} by {{$post->user->name}}<small></p>
                </li>
    </ul>


{{-- Disable buttons when vising as guest and verify user --}}

    @if(!Auth::guest()) 
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
        @endif
    @endif

</div>
   
@endsection



