<?php

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

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/addteam', 'TeamController@create')->middleware(['auth'])->name('addteam');

Route::post('/team/store', 'TeamController@store')->middleware(['auth'])->name('storeteam');

Route::get('/addrunner', function () {
    return view('dashboard');
})->middleware(['auth'])->name('addrunner');

Route::get('/leaderboards', function () {
    return view('dashboard');
})->middleware(['auth'])->name('leaderboards');

Route::get('/logrun', function () {
    return view('dashboard');
})->middleware(['auth'])->name('logrun');

require __DIR__.'/auth.php';
