@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-info">Go back</a>
        <div class="card-header">
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>

        
    <ul class="list-group list-group-flush">
            <li class="list-group-item">{!!$post->body!!}
                        <p><small>Writen on {{$post->created_at}} by {{$post->user->name}}<small></p>
                </li>
    </ul>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST' , 'class' => 'float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}

</div>
   
@endsection



