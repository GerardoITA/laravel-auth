<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class MainController extends Controller
{
    public function home(){

        $projects = Project::all();

        return view('welcome', compact('projects'));
    }
    public function privateHome()
    {
        $projects = Project::all();

        return view('dashboard', compact('projects'));
    }
    public function showProject($id)
    {
        $project = Project::find($id);

        $data = [
            'project' => $project
        ];

        return view('pages.showProject', compact('project'));
    }
    public function deleteProject($id) {
        $project = Project::find($id);

        $project->delete();

        return redirect()->route('dashboard');
    }
    public function editProject($id)
    {
        $project = Project::find($id);

        return view('dashboard', compact('projects'));
    }
    public function createProject()
    {

        return view('pages.createProject');
    }
    public function storeProject(Request $request)
    {

        $data = $request->all();

        $project = new Project();

        $project->name = $data['name'];
       /*  $project->description = $data['description']; */
        $project->mainImage = $data['mainImage'];
        $project->releaseDate = $data['releaseDate'];
        $project->repoLink = $data['repoLink'];

        $project->save();

        return redirect()->route('dashboard');
    }
}