<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatamasterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

// Routing Get
Route::get('/', [DashboardController::class, 'dashboardIndex'])->middleware('auth');
Route::get('/articlepage/{id}', [ContentController::class, 'articleRead']);
Route::get('/contentmanage', [ContentController::class, 'contentManage'])->middleware('is_admin');
Route::get('/datamanage', [DatamasterController::class, 'kaderManage']);
Route::get('/profile/{id}', [ProfileController::class, 'getProfile']);
Route::get('/register', function () {
    return view('auth.register');
});

//Routing Post
Route::post('/createannounce', [ContentController::class, 'CreateAnnounce']);
Route::post('/createarticle', [ContentController::class, 'CreateArticle']);
Route::post('/createdatakader', [DatamasterController::class, 'createKader']);
Route::post('/createquick', [ContentController::class, 'createQuick']);
Route::post('/storecarousel', [ContentController::class, 'storeCarousel']);
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/register', [LoginController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout']);

//Routing Patch

// Routing Delete
Route::delete('/deletearticle/{id}', [ContentController::class, 'deleteArticle']);
Route::delete('/deletedata/{id}', [DatamasterController::class, 'destroy']);
Route::delete('/deleteQuick/{id}', [ContentController::class, 'deleteQuick']);

//Temporary get routes
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/usersmanage', function () {
    return view('pages.usersmanage');
});
Route::get('/createcontent', function () {
    return view('pages.createcontent');
});
Route::get('/helpme', function () {
    return view('pages.helpme');
});

// ->middleware('auth:admin');
