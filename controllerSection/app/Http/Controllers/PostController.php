<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        return "Create User";
    }

    public function edit() {
        return "Edit User";
    }

    public function update() {
        return "Update User";
    }

    public function delete() {
        return "Delete User";
    }
}
