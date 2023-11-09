<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PermissionManagementController;
use App\Http\Controllers\Auth\RoleManagementController;
use App\Http\Controllers\UserManagement\DepartmentController;
use App\Http\Controllers\VamosIndividualController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'user'],function(){
    Route::apiResources([
        'role'  =>RoleManagementController::class,
        'permission'    =>  PermissionManagementController::class,
    ]);
});

Route::post('/login',[AuthController::class,'LogIn']);
Route::post('/search-data', [VamosIndividualController::class, 'findRecord']);
Route::get('/department-with-division-sec',[DepartmentController::class, 'fetchDepDivSecInfo']);
Route::post('/insertUserData', [UsersController::class, 'insertUserData']);
// Route::apiResource('/users', UsersController::class);
// Route::get('/view-user',[UsersController::class,'show']);
