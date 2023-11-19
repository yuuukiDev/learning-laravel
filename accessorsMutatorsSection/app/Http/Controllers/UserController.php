<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller
{
    public function index($id) {
        $user = User::find($id);
        return $user->name;
    }

    public function store() {
        User::create([
            'name' => "MohamedEmad",
            'email' => "MohamedEmad@yahoo.com",
            'password' => 123456,
        ]);
        return response("Data Added");
    }
}
