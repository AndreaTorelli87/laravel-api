<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/projects", [ProjectController::class, "index"]);

Route::get("/project/{slug}", [ProjectController::class, "show"]);