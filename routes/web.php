<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamembersController;


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
    return view('home',[
        'title'=>'home',
        'active'=>'home'
    ]);
});

Route::get('/fitur', function () {
    return view('fitur',[
        'title'=>'fitur',
        'active'=>'fitur'
    ]);
});

Route::get('/harga', function () {
    return view('harga',[
        'title'=>'harga',
        'active'=>'harga'
    ]);
});



Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);


Route::get('/team-members', [TeamembersController::class, 'index']);
//Route::get('/team-members', [TeamemberController::class, 'store'])->name('team-member.store');
//Route::resource('/team-members', UserController::class);
//Route::post('/team-members', [TeamemberController::class, 'index']);
