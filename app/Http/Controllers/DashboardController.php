<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\Project;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.dashboard.index', compact('projects'));
    }

    public function create()
    {
        return view('pages.dashboard.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string'],
            'method' => ['required']
        ]);
        $validateData['slug'] = Str::slug($request['name']);

        Project::create($validateData);

        return redirect(route('dashboard'))->with('success', 'Sukes Menambahkan Studi Kasus Baru');
    }

    public function show(Project $project)
    {
        $data = collect([
            'min' => [
                'c0' => Alternative::whereProjectId($project->id)->min('c1'),
                'c1' => Alternative::whereProjectId($project->id)->min('c2'),
                'c2' => Alternative::whereProjectId($project->id)->min('c3'),
                'c3' => Alternative::whereProjectId($project->id)->min('c4')
            ],
            'max' => [
                'c0' => Alternative::whereProjectId($project->id)->max('c1'),
                'c1' => Alternative::whereProjectId($project->id)->max('c2'),
                'c2' => Alternative::whereProjectId($project->id)->max('c3'),
                'c3' => Alternative::whereProjectId($project->id)->max('c4')
            ]
        ]);

        // return $data;
        return view('pages.project.index', compact('project', 'data'));
    }

    public function createAlt(Project $project)
    {
        $project->makeHidden(['criterias', 'alternatives']);

        return view('pages.dashboard.create-alternative', compact('project'));
    }

    public function storeAlt(Request $request, Project $project)
    {
        $data = $request->all();
        $data['project_id'] = $project->id;
        $data['slug'] = Str::slug($request['name']);

        Alternative::create($data);

        return redirect()->route('dashboard.show', $project->slug)->with('success', 'Sukes Menambahkan Data Alternative');
    }

    public function editAlt(Project $project, Alternative $alternative)
    {
        return view('pages.dashboard.edit-alternative', compact('project', 'alternative'));
    }

    public function updateAlt(Request $request, Project $project, Alternative $alternative)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request['name']);
        $data['project_id'] = $project->id;

        $alternative->update($data);

        // return $data;
        return redirect()->route('dashboard.show', $project->slug)->with('success', 'Sukes Mengupdate Data Alternative');
    }

    public function createCrt(Project $project)
    {
        return view('pages.dashboard.create-criteria', compact('project'));
    }

    public function storeCrt(Request $request, Project $project)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request['name']);
        $data['project_id'] = $project->id;

        Criteria::create($data);
        // return $data;
        return redirect()->route('dashboard.show', $project->slug)->with('success', 'Sukes Menambahkan Data Criteria');
    }
}
