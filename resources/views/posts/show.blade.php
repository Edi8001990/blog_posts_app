@extends('layouts.app')

@section('content')
<div class="card-header">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>

        
    <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$post->body}}
                        <p><small>Writen on {{$post->created_at}}<small></p>
                </li>
    </ul>

</div>
@endsection



