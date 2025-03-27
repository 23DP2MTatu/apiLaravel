<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory;
    protected $table = 'users';
    protected $fillable = ['username','email','password','password_confirm'];

    public function posts()
    {
        return $this->hasMany(Post::class, 'userID');
    }
}
