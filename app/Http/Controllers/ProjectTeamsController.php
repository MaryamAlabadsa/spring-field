<?php

namespace App\Http\Controllers;

use App\Models\ProjectTeams;
use App\Http\Requests\StoreProjectTeamsRequest;
use App\Http\Requests\UpdateProjectTeamsRequest;

class ProjectTeamsController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectTeamsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectTeamsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectTeams  $projectTeams
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectTeams $projectTeams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectTeams  $projectTeams
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectTeams $projectTeams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectTeamsRequest  $request
     * @param  \App\Models\ProjectTeams  $projectTeams
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectTeamsRequest $request, ProjectTeams $projectTeams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectTeams  $projectTeams
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectTeams $projectTeams)
    {
        //
    }
}
