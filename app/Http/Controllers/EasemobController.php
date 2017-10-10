<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use link1st\Easemob\Facades\Easemob;


class EasemobController extends Controller
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
        $user = Easemob::
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Easemob  $easemob
     * @return \Illuminate\Http\Response
     */
    public function show(Easemob $easemob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Easemob  $easemob
     * @return \Illuminate\Http\Response
     */
    public function edit(Easemob $easemob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Easemob  $easemob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Easemob $easemob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Easemob  $easemob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Easemob $easemob)
    {
        //
    }
}
