@extends('layouts.layout')
@section('content')

<div class="container w-75 mt-3 justify-content-center">
    @foreach($posts as $post)
        
        <div class="card border-secondary mb-3 w-100" style="width: 10rem;">
            <div class="card-header">{{$post->title}}</div>
            <div class="m-2 mb-0">
                <p class="card-text">{{$post->discription}}</p>
                <p class="">{{$post->User->username}}#{{$post->userID}}</p>
            </div>
            
            @if(Auth::id() == $post->userID)
                <div class="d-flex">
                <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary btn-sm m-1" style="width: 10rem">Edit</a>
                
                <form action="{{ route('post.delete', $post->id) }}" onsubmit="return confirm('Are you sure you want to delete this post?');" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary btn-sm m-1" style="width: 10rem">delete</button>
                </form>
            </div>
            @endif
        </div>
    @endforeach
</div>

@endsection