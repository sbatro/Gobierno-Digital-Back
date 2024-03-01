<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\RoleUserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(UserController::class)->group(function (){
    Route::get('/users', 'index');
    Route::post('/user', 'store');
    Route::get('/user/{id}', 'show');
    Route::put('/user/{id}', 'update');
    Route::delete('/user/{id}', 'destroy');
    Route::get('/userRoles/{id}', 'showRoles');
});
Route::controller(RoleController::class)->group(function (){
    Route::get('/roles', 'index');
    Route::post('/role', 'store');
    Route::get('/role/{id}', 'show');
    Route::put('/role/{id}', 'update');
    Route::delete('/role/{id}', 'destroy');
});
Route::controller(RoleUserController::class)->group(function (){
    Route::get('/rolesUsers', 'index');
    Route::post('/roleUser', 'store');
    Route::get('/roleUser/{id}', 'show');
    //Route::get('/rolesByIdUser/{id}', 'showByIdUser');
    Route::put('/roleUser/{id}', 'update');
    Route::delete('/roleUser/{id}', 'destroy');
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', [AuthController::class, 'register']);

});