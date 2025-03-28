@extends('layouts.layout')
@section('content')
<main class="d-flex justify-content-center align-items-center" style="height:90vh">
    <div class="mt-20" style="height:10rem">
        <form method="post" action="{{ route('auth.register') }}">
            @csrf
            <input type="text" class="form-control" name="username" id="username" placeholder="username" required> <br>
            <input type="email" class="form-control" name="email" id="email" placeholder="email" required> <br>
            <input type="password" class="form-control" name="password" id="password" placeholder="password" required> <br>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="confirm password" required> <br>
            <button type="submit" class="btn btn-dark w-100 mt-1">register</button> <br>
        </form>
        <a href="{{route('auth.login.show')}}" class="btn btn-secondary w-100 mt-1">login</a>
    </div>
    </main>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection