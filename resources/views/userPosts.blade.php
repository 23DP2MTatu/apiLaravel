<a href="{{route('post.index')}}">back</a>

@foreach($posts as $post)
    <div>
        <h1>{{$post->title}}</h1>
        <p>{{$post->discription}}</p>
        <p>{{$post->User->username}} , userID:{{$post->userID}}</p>
    </div>
@endforeach
