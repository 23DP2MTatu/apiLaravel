<a href="{{route('post.create')}}">create post</a>

<div>
    <form action="{{ route('post.show') }}" method="get">
        @csrf
        <label for="userID">search</label>
        <input type="number" name="userID" id="userID" placeholder="find user posts by id" >
        <button type="submit">search</button>
    </form>    
</div>

@foreach($posts as $post)
    <div>
        <h1>{{$post->title}}</h1>
        <p>{{$post->discription}}</p>
        <p>{{$post->User->username}} , userID:{{$post->userID}}</p>
        <a href="{{ route('post.edit', $post->id) }}">
            <button>edit</button>
        </a>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>
@endforeach
