<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Vote;
use App\User;
use App\Http\Resources\VoteResource;

class VoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['only' => ['update']]);
    }

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
	$user = User::find(Auth::id());
	if($user->vote === '' || $user->admin) {
		$user->vote = $id;
		$user->save();

		$vote = Vote::find($id);
		$votes = $request->votes;
		$vote->votes = $votes;
		$vote->save();
	}

	return VoteResource::collection(Vote::all()->sortBy('votes'));
    }
}
