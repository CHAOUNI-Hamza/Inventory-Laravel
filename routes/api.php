<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BonCommandeController;
use App\Http\Controllers\CategoryBdcController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MaterielController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

});


Route::apiResource('users', UserController::class);
Route::put('users/{user}/password', [UserController::class, 'updatePassword']);

Route::apiResource('services', ServiceController::class);
Route::apiResource('commandes', BonCommandeController::class);
Route::apiResource('categoriesbdc', CategoryBdcController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('affectations', AffectationController::class);
Route::apiResource('materiels', MaterielController::class);
