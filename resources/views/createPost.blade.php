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
    <div>
        <label for="userID">UserID</label>
        <input type="number" name="userID" id="userID" placeholder="Enter the UserID">
    </div>
    <button type="submit">create</button>
</form>