@extends('layouts.layout')
@section('content')

<main class="d-flex justify-content-center align-items-center" style="height:90vh">
    <div class="mt-20" style="height:10rem">
<form action="{{ route('post.store')}}" method="post">
@csrf    
<div>
        <label for="title">Title</label> <br>
        <input type="text" class="form-control"  name="title" id="title" placeholder="Enter the title">
    </div>
    <div>
        <label for="discription">Discription</label> <br>
        <textarea name="discription" class="form-control"  id="discription" placeholder="Enter the discription"></textarea>
    </div>
    <button type="submit" class="btn btn-dark w-100 mt-1">create</button>
</form>
</div>
</main>
@endsection