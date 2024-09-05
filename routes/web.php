<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BatchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/ah/{any?}', function () {
    return view('main');
})->where('any', '^(?!api\/)[\/\w\.-]*');

Route::get('/post/{slug}', [PostController::class, 'show']);

Route::get('/batch/show', [BatchController::class, 'showAll']);
Route::get('/batch/create', [BatchController::class, 'create']);
Route::get('/batch/{id}/createItem', [BatchController::class, 'createItem']);
Route::get('/batch/{id}/show', [BatchController::class, 'show']);
Route::get('/batch/{id}/update', [BatchController::class, 'update']);
Route::get('/batch/{id}/deleteItem', [BatchController::class, 'deleteItem']);
Route::get('/batch/{id}/delete', [BatchController::class, 'delete']);