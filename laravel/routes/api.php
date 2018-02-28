<?php

use Illuminate\Http\Request;

use App\Vote;
use App\Http\Resources\VoteResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('rest:api')->group(function() {

    Route::get('/snacks', function() {
        return VoteResource::collection(Vote::all()->sortBy('votes'));
    });

    Route::get('/snacks/{id}', function($id) {
        return new VoteResource(Vote::find($id));
    });

    Route::patch('/snacks/{id}', function($id, Request $request) {
	$vote = Vote::find($id);
	$votes = $request->votes;
	$vote->votes = $votes;
	$vote->save();
	return VoteResource::collection(Vote::all()->sortBy('votes'));
    });

});
