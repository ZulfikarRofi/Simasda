<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatamasterController;
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

// Routing Get
Route::get('/', [DashboardController::class, 'dashboardIndex']);
Route::get('/articlepage/{id}', [ContentController::class, 'articleRead']);
Route::get('/contentmanage', [ContentController::class, 'contentManage']);
Route::get('/datamanage', [DatamasterController::class, 'kaderManage']);


//Temporary get routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', 'LoginController@logout');
Route::get('/usersmanage', function () {
    return view('pages.usersmanage');
});
Route::get('/createcontent', function () {
    return view('pages.createcontent');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/helpme', function () {
    return view('pages.helpme');
});

//Routing Post
Route::post('/createannounce', [ContentController::class, 'CreateAnnounce']);
Route::post('/createarticle', [ContentController::class, 'CreateArticle']);
Route::post('/createdatakader', [DatamasterController::class, 'createKader']);

// ->middleware('auth:admin');
