<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(Request $request) {
        $posts = Post::with("user")->paginate(10);
        return response()->json($posts);
    }

    public function add(Request $request) {

    }

    public function delete(Request $request) {

    }
}
