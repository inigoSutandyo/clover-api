<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/", function () {
    return response()->json("HELLO WORLD");
});
Route::post("/login", [AuthController::class, "login"]);

Route::prefix("/community")->group(function () {
    Route::get("/", [CommunityController::class, "index"]);
});


Route::middleware('auth:api')->group(function () {
    Route::prefix("/post")->group(function () {
        Route::get("/", [PostController::class, "index"]);
        Route::post("/add", [PostController::class, "add"]);
        Route::delete("/delete", [PostController::class, "delete"]);
    });
    Route::get("/user", [AuthController::class, "index"]);
    /**
     * OTHER ROUTES
     */
});
