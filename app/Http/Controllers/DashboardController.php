<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use App\Models\Criteria;
use App\Models\Project;
use Illuminate\Support\Str;
use Facade\FlareClient\View;
use GuzzleHttp\Handler\Proxy;
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
                'c0' => Alternative::min('c1'),
                'c1' => Alternative::min('c2'),
                'c2' => Alternative::min('c3'),
                'c3' => Alternative::min('c4')
            ],
            'max' => [
                'c0' => Alternative::max('c1'),
                'c1' => Alternative::max('c2'),
                'c2' => Alternative::max('c3'),
                'c3' => Alternative::max('c4')
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
}
