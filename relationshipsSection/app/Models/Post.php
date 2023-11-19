<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $appends = ["comments"];

    public function comments() {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function getCommentsAttribute()
    {
        return $this->comments()->get();
    }
}
