<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::group(
    [
        'middleware' => 'auth',
        'prefix' => 'tasks',
        'as' => 'tasks.',
    ],
    function () {
        Route::post('store', [TaskController::class, 'store'])->name('store');
        Route::get('/', [TaskController::class, 'index'])->name('index');
    }
);

Route::get('/home', [HomeController::class, 'index'])->name('home');
