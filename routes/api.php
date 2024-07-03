<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubjectAreaController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('questions/get',[QuestionController::class,'get']);
Route::post('chapters',[ChapterController::class,'index']);
Route::apiResources([
    'subjects' => SubjectController::class,
    // 'chapters' => ChapterController::class,
    'subject-areas' => SubjectAreaController::class,
    'documents' => DocumentController::class,
    'questions' => QuestionController::class
]);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
