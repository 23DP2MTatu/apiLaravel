<a href="{{route('post.index')}}">back</a>

@foreach($posts as $post)
    <div>
        <h1>{{$post->title}}</h1>
        <p>{{$post->discription}}</p>
        <p>{{$post->User->username}} , userID:{{$post->userID}}</p>
    </div>
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
@endforeach
