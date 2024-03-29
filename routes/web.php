<?php

use App\Http\Controllers\CoreController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name("core:")->group(function() {
   Route::get("/", [CoreController::class, "index"])->name("index");
});
Route::prefix("team")->name("team:")->group(function() {
   Route::get("/", [TeamController::class, "index"])->name("index");
});
Route::prefix("project")->name("project:")->group(function() {
   Route::get("/", [ProjectController::class, "index"])->name("index");
});
Route::prefix("user")->name("user:")->group(function() {
   Route::get("/", [UserController::class, "index"])->name("index");
});
