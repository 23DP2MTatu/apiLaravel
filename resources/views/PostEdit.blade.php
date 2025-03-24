<a href="{{route('post.index')}}">main</a>

<form action="{{ route('post.update', $post->id)}}" method="post">
@csrf
@method('patch')
<div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter the title">
    </div>
    <div>
        <label for="discription">Discription</label>
        <textarea name="discription" id="discription" placeholder="Enter the discription"></textarea>
    </div>
    <button type="submit">edit</button>
</form>