<a href="{{route('post.index')}}">main</a>

<form action="{{ route('post.store')}}" method="post">
@csrf    
<div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" placeholder="Enter the title">
    </div>
    <div>
        <label for="discription">Discription</label>
        <textarea name="discription" id="discription" placeholder="Enter the discription"></textarea>
    </div>
    <button type="submit">create</button>
</form>