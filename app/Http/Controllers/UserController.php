<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()  {
        $users = Users::all();
        return response()->json($users);
    }

    public function store(request $request) {
        $users = new Users;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        return response()->json([
            'message' => 'User added.'
        ], 201);
    }

    public function show($id) {
        $user = Users::find($id);
        if (!empty($user)) {
            return response()->json($user);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);
        }
    }

    public function update(Request $request, $id) {
        if (Users::where('id', $id)->exists()) {
            $user = Users::find($id);
            $user -> name = is_null($request->name) ? $user->name : $request->name;
            $user -> email = is_null($request->email) ? $user->email : $request->email;
            $user -> password = is_null($request->password) ? $user->password : Hash::make($request->password);
            
            $user->save();
            
            return response()->json([
                "message" => "user Updated."
            ], 404);
        } else {
            return response()->json([
                "message" => "user not found."
            ], 404);
        }
    }

    public function destroy($id) {
        if (Users::where('id',$id)->exists()) {
            $user = Users::find($id);
            $user->delete();
            
            return response()->json([
                "message" => "records deleted."
            ], 202);
        } else {
            return response()->json([
                "message" => "user not found."
            ], 404);
        }
    }
}
