@extends('layouts.layout')
@section('content')
<main class="d-flex justify-content-center align-items-center" style="height:90vh">
    <div class="mt-20" style="height:10rem">
        <form method="post" action="{{route('auth.login')}}">
                @csrf
                <input type="username" class="form-control" name="login" placeholder="username or email" required> <br>
                <input type="password" name="password" class="form-control" placeholder="password" required> <br>
                <button type="submit" class="btn btn-dark w-100" >login</button>
            </form>
            <a href="{{route('auth.register.show')}}" class="btn btn-secondary w-100 mt-1" >register</a>
        
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
</main>
@endsection