<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Media;
use App\Models\News;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\ProjectServices;
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
        $comments = Comment::all();
        $teams = Teams::all();
        $allNews = News::all();
        return view('layouts.sections.home.home-index', compact('services', 'projects', 'comments', 'teams', 'allNews'));
    }

    public function indexvv($id)
    {
//        $comments = Comment::paginate(3);

        $teams = Teams::paginate(8);
        $project = Project::where('id', $id)->first();
//        $teams = $project->project_team_member;
//        dd($teams);


        return view('layouts.sections.projects.index', ['project' => $project, 'teams' => $teams]);

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
     * @return string[]
     */
    public function store(StoreProjectRequest $request)
    {
        $projects = Project::create([
//            'image' => $filename,
            'title' => $request->title,
            'location' => $request->location,
            'Brief_description' => $request->title,
            'description' => $request->title,
            'completed_time' => $request->completed_time,
        ]);

        if ($request->hasFile('image')) {
            foreach ($request->image as $asset) {
                $filename = date('YmdHi') . $asset->getClientOriginalName();
//                dd($filename);
                $asset->move(public_path('public/Image'), $filename);
                $projects->media()->create([
                    'name' => $filename,
                    'original_name' => $asset->getClientOriginalName(),
                    'is_main' => $request->is_main,
                    'mediaable_id' => $projects->id,
                    'file_type' => $request->file_type,

                ]);
            }
        }

        if ($request->Project_services) {
            foreach ($request->Project_services as $Project_service) {
                $projects->projectServices()->create([
                    'service_id' =>$Project_service,
                    'project_id' => $projects->id,
                ]);
            }
        }

        if ($request->projectTeamMember) {
            foreach ($request->projectTeamMember as $projectTeamMember) {
                $projects->projectTeamMember()->create([
                    'team_member_id' => $projectTeamMember,
                    'project_id' => $projects->id,
                ]);
            }
        }


        return ['message' => 'added Successfully'
        ];//
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
        return view('layouts.sections.projects.details', ['project' => $project]);

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
