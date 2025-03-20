<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Http\Resources\UserResource;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()  {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function store(userRequest $request) {

        $validated = $request->validated();
    
        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);
        
        return response()->json([
            'message' => 'User added.',
            'user' => new UserResource($validated),
        ], 201);
    }

    public function show(User $user) {
        return new UserResource($user);
    }

    public function update(userRequest $request, User $user) {
    
        $validated = $request->validated();

        $user->update($validated);
        
        return response()->json([
            'message' => 'User updated',
            'user' => new UserResource($validated),
        ]);
    }

    public function destroy(User $user) {
        $user->delete();
        return response()->json([
            "message" => "records deleted."
        ], 202);
    }
}