@extends('layouts.layout')
@section('content')
<main class="d-flex justify-content-center align-items-center" style="height:90vh">
    <div class="mt-20" style="height:10rem">
<form action="{{ route('post.update', $post->id)}}" method="post">
@csrf
@method('patch')
<div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control"  placeholder="Enter the title" value="{{ old('title', $post->title) }}">
    </div>
    <div>
        <label for="discription">Discription</label>
        <textarea name="discription" id="discription" class="form-control"  placeholder="Enter the discription">{{ old('discription', $post->discription) }}</textarea>
    </div>
    <button type="submit" class="btn btn-dark w-100 mt-1">edit</button>
</form>
</div>
</main>
@endsection