<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment','user_id','post_id'];
    public function users(){
        return $this->hasMany(User::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
