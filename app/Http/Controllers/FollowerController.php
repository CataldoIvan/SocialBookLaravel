<?php

namespace App\Http\Controllers;

use App\Follower;
use Illuminate\Http\Request;

class FollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        $follower=new Follower();
        $follower-> user_id=$request['user'];
        $follower-> follower_id=$request['follower'];
        $follower->save();
       return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function show(Followers $followers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function edit(Followers $followers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Followers $followers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Followers  $followers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Followers $followers)
    {
        //
    }
}
