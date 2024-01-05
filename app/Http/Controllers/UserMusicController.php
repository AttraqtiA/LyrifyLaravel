<?php

namespace App\Http\Controllers;

use App\Models\UserMusic;
use App\Http\Requests\StoreUserMusicRequest;
use App\Http\Requests\UpdateUserMusicRequest;

class UserMusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserMusicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserMusic $userMusic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserMusic $userMusic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserMusicRequest $request, UserMusic $userMusic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserMusic $userMusic)
    {
        //
    }
}
