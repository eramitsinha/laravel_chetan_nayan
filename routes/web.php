<?php

use App\Http\Controllers\UserController;
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


Route::get('about',[UserController::class,'about']);

// contact
Route::get('contact/abc/xyz/ppp',[UserController::class,'contact'])->name('cp');

// form
Route::get('register',[UserController::class,'register']);
Route::post('save',[UserController::class,'save']);


// display data
Route::get('show',[UserController::class,'show']);


// delete
Route::get('delete/{id}',[UserController::class,'delete']);


// login
Route::get('login',[UserController::class,'login']);
Route::post('login_check',[UserController::class,'login_check']);

Route::get('dashboard',[UserController::class,'dashboard']);

?>
