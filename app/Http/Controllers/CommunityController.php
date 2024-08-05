<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index(Request $request) {
        $search = $request->search;
        if ($search) {
            $data = Community::where("name", "LIKE", "%".$search."%")->get();
        } else {
            $data = Community::all();
        }
        return response()->json($data);
    }

}
