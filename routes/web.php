<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamemberController;

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

Route::get('/utama', function () {
    return view('dashboard.utama',[
        "title" => "utama",
        "active" => "utama"
    ]);
});
Route::get('/product', function () {
    return view('dashboard.product',[
        "title" => "product",
        "active" => "product"
    ]);
});
Route::get('/orders', function () {
    return view('dashboard.orders',[
        "title" => "orders",
        "active" => "orders"
    ]);
});
Route::get('/logistic', function () {
    return view('dashboard.logistic',[
        "title" => "logistic",
        "active" => "logistic"
    ]);
});
Route::get('addmember', function () {
    return view('dashboard.addmember',[
        "title" => "addmember",
        "active" => "addmember"
    ]);
});
Route::get('addproduct', function () {
    return view('dashboard.product.addproduct',[
        "title" => "addproduct",
        "active" => "addproduct"
    ]);
});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');


//Route::resource('team-members', UserController::class);

Route::resource('team-members', MemberController::class);
Route::resource('product', ProductController::class);
Route::post('product', [ProductController::class, 'store']);

//Route::get('/team-members', [TeamemberController::class,]);
//Route::get('/team-members', [TeamemberController::class, 'store'])->name('team-member.store');
//Route::resource('/team-members', UserController::class);
//Route::post('/team-members', [TeamemberController::class, 'index']);

