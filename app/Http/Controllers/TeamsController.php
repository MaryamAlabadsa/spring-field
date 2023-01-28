<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Http\Requests\StoreTeamsRequest;
use App\Http\Requests\UpdateTeamsRequest;

class TeamsController extends Controller
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
     * @param  \App\Http\Requests\StoreTeamsRequest  $request
     * @return string[]
     */
    public function store(StoreTeamsRequest $request)
    {
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
//         $filename;

        Teams::create([
            'image' => $filename,
            'name' => $request->name,
            'bio' => $request->bio,
            'job_description' => $request->job_description,
//            'first_user' => Auth::id(),
        ]);

        return ['message' => 'added Successfully',
//            'data' => [PostResource::make($post)],
        ];//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function show(Teams $teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(Teams $teams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamsRequest  $request
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamsRequest $request, Teams $teams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teams  $teams
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $teams)
    {
        //
    }
}
