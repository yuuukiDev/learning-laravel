<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }
    public function create() {
        return view('posts.create');
    }
    public function insert(Request $request) {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return response('Data has been added');
    }
    public function edit($id) {
        // DB::table('posts')->where('id', $id)->first();
        // return view('posts.edit', compact('post'));
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id) {
        DB::table('posts')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return response('Data Updated');
    }
}
