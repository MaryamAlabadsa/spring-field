<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Media;
use App\Models\News;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Service;
use App\Models\Teams;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(3);
        $projects = Project::all();
        $comments = Comment::paginate(3);
        $teams = Teams::paginate(8);
        $allNews = News::paginate(4);
        return view('layouts.sections.home.home-index', compact('services', 'projects', 'comments', 'teams', 'allNews'));

    }

    public function filter(Request $request)
    {
        $serviceId = $request->input('service_id');
        $projects = Project::with('projectServices')->whereHas('projectServices', function ($query) use ($serviceId) {
            $query->where('service_id', $serviceId);
        })->get();
//        dd($projects);
        return $projects;
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
     * @param \App\Http\Requests\StoreProjectRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id', $id)->first();

//        dd( $project->title);
//        return view('layouts.sections.projects.index', compact($project));
        return view('layouts.sections.projects.index', ['project' => $project]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateProjectRequest $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

//    public function downloadPDF()
////    public function downloadPDF(Media $media)
//    {
//        // Send the PDF file to the user's browser with a download prompt
//        $a=  url('public/Image/' .'202301072042sfc logo.pdf');
////        $a= url('/storage/' .'public/p8ziUV7IKf2M1UqrwscsDURLbSwPwg8hpDOOeKPi.pdf');
//        return $a;
//    }
}
