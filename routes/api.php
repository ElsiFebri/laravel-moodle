<?php

use App\Http\Controllers\MdlCourseCategoryController;
use App\Http\Controllers\MdlCourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('mdl_course', [MdlCourseController::class, 'index']);
Route::get('mdl_course/{id}', [MdlCourseController::class, 'show']);
Route::post('mdl_course/create', [MdlCourseController::class, 'store']);
Route::put('mdl_course/update/{id}', [MdlCourseController::class, 'update']);
Route::post('mdl_course/delete/{id}', [MdlCourseController::class, 'destroy']);

Route::get('mdl_category', [MdlCourseCategoryController::class, 'index']);
Route::get('mdl_category/{id}', [MdlCourseCategoryController::class, 'show']);
Route::post('mdl_category/create', [MdlCourseCategoryController::class, 'store']);
Route::put('mdl_category/update/{id}', [MdlCourseCategoryController::class, 'update']);
Route::post('mdl_category/delete/{id}', [MdlCourseCategoryController::class, 'destroy']);
