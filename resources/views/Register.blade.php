<a href="{{route('post.index')}}">main</a>

<form method="post" action="{{ route('auth.register') }}">
    @csrf
    <input type="text" name="username" id="username" placeholder="username" required>
    <input type="email" name="email" id="email" placeholder="email" required>
    <input type="password" name="password" id="password" placeholder="password" required>
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirm password" required>
    <button type="submit">register</button>
</form>

<a href="{{route('auth.login.show')}}">login</a>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
