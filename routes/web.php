<?php

use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.dashboard');
})->middleware('auth:admin', 'auth:user');
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', 'LoginController@logout');
Route::get('/usersmanage', function () {
    return view('pages.usersmanage');
})->middleware('auth:admin');
Route::get('/datamanage', function () {
    return view('pages.datamanage');
})->middleware('auth:admin');
Route::get('/contentmanage', function () {
    return view('pages.contentmanage');
})->middleware('auth:admin');
Route::get('/createcontent', function () {
    return view('pages.createcontent');
})->middleware('auth:admin');
Route::get('/articlepage', function () {
    return view('pages.articleread');
})->middleware('auth:admin');
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/helpme', function () {
    return view('pages.helpme');
});
