<?php

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

Route::middleware('auth:sanctum')->group(function () {
    // This route will be accessible only by authenticated users via Sanctum
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

});

Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);

// API routes for attendances
Route::apiResource('attendances', \App\Http\Controllers\Api\AttendanceController::class);
// API routes for childrens
Route::apiResource('childrens', \App\Http\Controllers\Api\ChildController::class);
// API routes for events
Route::apiResource('events', \App\Http\Controllers\Api\EventController::class);
// API routes for failed-jobs
Route::apiResource('failed-jobs', \App\Http\Controllers\Api\FailedJobController::class);
// API routes for families
Route::apiResource('families', \App\Http\Controllers\Api\FamilyController::class);
// API routes for memberships
Route::apiResource('memberships', \App\Http\Controllers\Api\MembershipController::class);
// API routes for migration-s
Route::apiResource('migration-s', \App\Http\Controllers\Api\MigrationController::class);
// API routes for password-reset-tokens
Route::apiResource('password-reset-tokens', \App\Http\Controllers\Api\PasswordResetTokenController::class);
// API routes for personal-access-tokens
Route::apiResource('personal-access-tokens', \App\Http\Controllers\Api\PersonalAccessTokenController::class);
// API routes for post-tags
Route::apiResource('post-tags', \App\Http\Controllers\Api\PostTagController::class);
// API routes for posts
Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);
// API routes for schools
Route::apiResource('schools', \App\Http\Controllers\Api\SchoolController::class);
// API routes for tags
Route::apiResource('tags', \App\Http\Controllers\Api\TagController::class);
// API routes for users
Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
