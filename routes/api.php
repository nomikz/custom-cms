<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your applls
ication. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('articles', 'ArticleController');
Route::apiResource('clubs', 'ClubController');
Route::apiResource('events', 'EventController');
Route::get('events-by-date', 'EventController@getSortedByDate');
Route::apiResource('governance-members', 'GovernanceController');
Route::apiResource('members', 'MemberController');
Route::apiResource('regions', 'RegionController');
Route::apiResource('regionals', 'RegionalController');
Route::apiResource('results', 'ResultController');
Route::apiResource('tags', 'TagController');
Route::apiResource('supporters', 'SupporterController');
Route::get('/static/about-page', 'StaticContentController@aboutPage');
