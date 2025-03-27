<a href="{{route('post.index')}}">main</a>
<form method="post" action="{{route('auth.login')}}">
    @csrf
    <input type="username" name="login" placeholder="username or email" required>
    <input type="password" name="password" placeholder="password" required>
    <button type="submit">login</button>
</form>
<a href="{{route('auth.register.show')}}">register</a>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
