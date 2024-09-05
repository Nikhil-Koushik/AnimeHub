<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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