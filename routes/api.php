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


// result routes
Route::post('results/{result}', 'ResultController@update');
Route::apiResource('results', 'ResultController');


// result routes
Route::post('articles/{article}', 'ArticleController@update');
Route::apiResource('articles', 'ArticleController');


// event routes
Route::post('events/{event}', 'EventController@update');
Route::apiResource('events', 'EventController');
Route::get('events-by-date', 'EventController@getSortedByDate');



// supporter routes
Route::post('supporters/{supporter}', 'SupporterController@update');
Route::apiResource('supporters', 'SupporterController');

// Region routes
Route::post('regions/{region}', 'RegionController@update');
Route::apiResource('regions', 'RegionController');

// cLub routes
Route::post('clubs/{club}', 'ClubController@update');
Route::apiResource('clubs', 'ClubController');

// member routes
Route::post('members/{member}', 'MemberController@update');
Route::apiResource('members', 'MemberController');

// governance member routes
Route::post('governance-members/{governanceMember}', 'GovernanceController@update');
Route::apiResource('governance-members', 'GovernanceController');



Route::get('/static', 'StaticContentController@get');
Route::put('/static', 'StaticContentController@update');
