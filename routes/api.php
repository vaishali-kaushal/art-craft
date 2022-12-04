<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', 'App\Http\Controllers\Api\Auth\PassportAuthController@register')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\Api\Auth\PassportAuthController@login')->middleware('guest');
Route::post('/logout', 'App\Http\Controllers\Api\Auth\PassportAuthController@logout')->middleware('guest');

 
Route::get('/auth/redirect/github', function () {
    return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/callback/github', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});
Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
});
