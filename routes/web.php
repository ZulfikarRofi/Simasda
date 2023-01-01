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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.dashboard');
});
Route::get('/usersmanage', function () {
    return view('pages.usersmanage');
});
Route::get('/datamanage', function () {
    return view('pages.datamanage');
});
Route::get('/contentmanage', function () {
    return view('pages.contentmanage');
});
Route::get('/createcontent', function () {
    return view('pages.createcontent');
});
Route::get('/articlepage', function () {
    return view('pages.articleread');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
