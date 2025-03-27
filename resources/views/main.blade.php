<div>
    @if (Auth::check())
    <a href="{{route('post.logout')}}">logout</a>
    <a href="{{route('post.create')}}">create post</a>
    @else
        <a href="{{route('auth.login.show')}}">login</a>
        <a href="{{route('auth.register.show')}}">register</a>
    @endif
</div>

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
        <p>{{$post->User->username}}#{{$post->userID}}</p>
        
        @if(Auth::id() == $post->userID)
            <a href="{{ route('post.edit', $post->id) }}">
                <button>edit</button>
            </a>
            <form action="{{ route('post.delete', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        @endif
    </div>
@endforeach
