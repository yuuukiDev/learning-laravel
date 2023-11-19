<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return view("posts.index",compact("posts"));
    }
}
