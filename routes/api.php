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
// API routes for children
Route::apiResource('children', \App\Http\Controllers\Api\ChildController::class);
// API routes for events
Route::apiResource('events', \App\Http\Controllers\Api\EventController::class);
// API routes for failed-jobs
Route::apiResource('failed-jobs', \App\Http\Controllers\Api\FailedJobController::class);
// API routes for families
Route::apiResource('families', \App\Http\Controllers\Api\FamilyController::class);
// API routes for family-ties
Route::apiResource('family-ties', \App\Http\Controllers\Api\FamilyTyController::class);
// API routes for jobs
Route::apiResource('jobs', \App\Http\Controllers\Api\JobController::class);
// API routes for migrations
Route::apiResource('migrations', \App\Http\Controllers\Api\MigrationController::class);
// API routes for password-reset-tokens
Route::apiResource('password-reset-tokens', \App\Http\Controllers\Api\PasswordResetTokenController::class);
// API routes for personal-access-tokens
Route::apiResource('personal-access-tokens', \App\Http\Controllers\Api\PersonalAccessTokenController::class);
// API routes for post-tags
Route::apiResource('post-tags', \App\Http\Controllers\Api\PostTagController::class);
// API routes for posts
Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);
// API routes for school-family-enrollments
Route::apiResource('school-family-enrollments', \App\Http\Controllers\Api\SchoolFamilyEnrollmentController::class);
// API routes for schools
Route::apiResource('schools', \App\Http\Controllers\Api\SchoolController::class);
// API routes for tags
Route::apiResource('tags', \App\Http\Controllers\Api\TagController::class);
// API routes for users
Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
Route::apiResource('location-countries', \App\Http\Controllers\Api\LocationCountryController::class);
Route::apiResource('location-states', \App\Http\Controllers\Api\LocationStateController::class);
Route::apiResource('location-substates', \App\Http\Controllers\Api\LocationSubstateController::class);
Route::apiResource('location-towns', \App\Http\Controllers\Api\LocationTownController::class);
Route::apiResource('location-suburbs', \App\Http\Controllers\Api\LocationSuburbController::class);
Route::apiResource('private-events', \App\Http\Controllers\Api\PrivateEventController::class);
