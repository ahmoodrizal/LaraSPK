<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Str;
use Facade\FlareClient\View;
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
        return view('pages.project.index', [
            'project' => $project
        ]);
    }
}
