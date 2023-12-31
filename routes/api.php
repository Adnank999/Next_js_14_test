<?php

use App\Http\Controllers\TaskController;
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

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware(['auth:sanctum'])->group(function () {
 
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

   
   
});

Route::post('/tasks/create', [TaskController::class, 'create']);
Route::get('/tasks/show', [TaskController::class, 'show']);
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit']);
Route::post('/tasks/{id}/update', [TaskController::class, 'update']);
Route::post('/tasks/{id}/delete', [TaskController::class, 'destroy']);