<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\SearchController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


    Route::group(['middleware' => 'auth'], function() {
        Route::get('/', [AccessController::class, 'index']);
        Route::get('/add', [AccessController::class, 'add']);
        Route::post('/add', [AccessController::class, 'add']);
        
        Route::get('/edit', [AccessController::class, 'edit']);
        Route::post('/edit', [AccessController::class, 'edit']);

        Route::get('/find', [SearchController::class, 'find']);
        Route::get('/search', [SearchController::class, 'search'])->name('search');

        Route::post('/delete', [SearchController::class, 'delete']);
    });
require __DIR__.'/auth.php';

