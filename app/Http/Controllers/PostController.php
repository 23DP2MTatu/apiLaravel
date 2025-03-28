<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function index() {

        $posts = Post::all();
        return view('main', compact('posts'));
    }

    function create() {
        
        return view('createPost');
    }

    function store(PostRequest $request) {
        
        $userID = Auth::id();
        
        $post = $request -> validated();
        
        $post['userID'] = $userID;
        
        Post::create($post);
        return redirect()->route('post.store');
    }

    function show(Request $request) {
        
        $user = User::find($request->input('userID'));
        
        if (!$user) {
            $user = User::find(Auth::id());
        }

        $posts = $user->posts;
        return view('userPosts', compact('posts','user'));
    }

    function edit($id){
        $post = Post::find($id);
        return view('PostEdit', compact('post'));
    }

    function update(PostRequest $request, Post $post) {
        
        $postValidated = $request -> validated();
        
        $post->update($postValidated);

        return redirect()->route('post.store');
    }

    function destroy(Post $post) {
        
        $post->delete();
        return redirect()->route('post.index');
    }
}
