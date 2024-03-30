<?php
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\TeamController;
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

// Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
//    return $request->user();
// });
Route::prefix("v1")->name("v1:")->group(function() {
   Route::prefix("team")->name("team:")->group(function() {
      Route::get("/{idTeam}", [TeamController::class, "index"]);
      Route::get("/users/{idTeam}", [TeamController::class, "users"]);
   });
   Route::prefix("project")->name("project:")->group(function() {
      Route::get("/{idTeam}", [ProjectController::class, "index"]);
      Route::get("/all/{idTeam}", [ProjectController::class, "all"]);
   });
   Route::prefix("task")->name("task:")->group(function() {
      Route::get("/{idTeam}/{idProject}", [TaskController::class, "index"]);
   });
});
