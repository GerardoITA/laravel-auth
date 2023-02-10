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

        return view('dashboard', compact('projects'));
    }
}