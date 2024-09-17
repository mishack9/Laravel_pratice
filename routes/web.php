<?php

use App\Http\Controllers\ClientApiController;
use App\Http\Controllers\FileuploadController;
use App\Http\Controllers\FlashsessionController;
use App\Http\Controllers\HttprequestController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/user-form', 'user-form');
Route::post('user_form', [UserController::class, 'user_su']);

Route::get('user', [UsersController::class, 'user']);
Route::get('get_student', [StudentController::class, 'get_student']);

Route::get('getApi', [ClientApiController::class, 'getApi']);
Route::get('query', [QueryBuilderController::class, 'query']);

Route::view('httprequest', 'httprequest');
Route::post('request', [HttprequestController::class, 'request']);

Route::view('usersesssion', 'usersesssion');
Route::post('sessioncheck', [UsersessionController::class, 'sessioncheck']);
Route::view('sessionprofile', 'sessionprofile');
Route::get('logout', [UsersessionController::class, 'logout']);

Route::view('flashsession', 'flashsession');
Route::post('flash', [FlashsessionController::class, 'flashsession']);

Route::view('fileupload', 'fileupload');
Route::post('fileupload', [FileuploadController::class, 'file']);

Route::view('localization', 'localization');
Route::view('localization_about', 'localization_about')->name('about');