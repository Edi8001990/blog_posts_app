@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-link">Go Back To All Posts</a>
        <div class="card-header">
            
            <div class="card-header">
                <h1>{{$post->title}}</h1>
            </div>
            

        
    
            <li class="list-group-item">{!!$post->body!!}
                        <p><small>Writen on {{$post->created_at}} by {{$post->user->name}}<small></p>
                            <img style="width:20%" src="/storage/cover_images/{{$post->cover_image}}">
                </li>
    
                

{{-- Disable buttons when vising as guest and verify user --}}

    @if(!Auth::guest()) 
        @if(Auth::user()->id == $post->user_id)
    
        <div class="row">
                <div class="col-sm">
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary edit-button">Edit</a>

                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Remove Post', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!} 
                </div>

                
            </div>
    
    
            
   
        @endif
    @endif

</div>


   
@endsection



