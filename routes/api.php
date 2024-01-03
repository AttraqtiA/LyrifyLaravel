<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MusicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*76
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// http://127.0.0.1:8000/api/all_user
Route::post('create_user', [UserController::class, 'createUser']);
Route::post('login', [AuthenticationController::class, 'login'])->name('login');
Route::get('user/{id}', [UserController::class, 'getUser']);

//CHAPTERS
Route::get('/chapters', [ChapterController::class, 'getAllChapter']);

//HISTORIES
Route::get('/histories', [HistoryController::class, 'getAllhistory']);

//LEVELS
Route::get('/levels', [LevelController::class, 'getAlllevel']);

//MUSICS
Route::get('/musics', [MusicController::class, 'getAlllmusic']);


// Route::middleware(['auth:sanctum'])->group(
//     function(){
        Route::get('all_user', [UserController::class, 'getAllUser']);
        Route::get('check_password', [UserController::class, 'checkPassword']);

        Route::patch('update_user/{id}', [UserController::class, 'updateUser']);
        Route::delete('delete_user/{id}', [UserController::class, 'deleteUser']);

        Route::delete('logout', [AuthenticationController::class, 'logout']);
    // }
// );
        // Route::apiResource('user',UserController::class);

