<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;
use App\Http\Resources\VoteResource;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return VoteResource::collection(Vote::all()->sortBy('votes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new VoteResource(Vote::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
	$vote = Vote::find($id);
	$votes = $request->votes;
	$vote->votes = $votes;
	$vote->save();
	return VoteResource::collection(Vote::all()->sortBy('votes'));
    }
}
