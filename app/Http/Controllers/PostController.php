<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(Request $request) {
        $posts = Post::all();
        return response()->json("HELLO WORLD");
    }

    public function add(Request $request) {

    }

    public function delete(Request $request) {

    }
}
