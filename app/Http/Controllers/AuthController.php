<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);


        if ($validator->stopOnFirstFailure()->fails()) {
            return response()->json([
                "message" => $validator->errors()->first()
            ], 400);
        }

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                "message" => "Unauthorized"
            ], 401);
        }
        $user = $request->user();
        $token = $user->createToken("PAT");
        // error_log(print_r($token, true));
        return response()->json([
            "user"=> $user,
            "access_token" => $token->accessToken,
            "token_type" => "Bearer",
            "expires_at" => Carbon::parse(
                $token->token->expires_at
            )->toDateTimeString()
        ], 200);
    }

    public function index(Request $request) {
        $user = Auth::user();
        return response()->json([
            "user"=> $user,
        ], 200);
    }
}
