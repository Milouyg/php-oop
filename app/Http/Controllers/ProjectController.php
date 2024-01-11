<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects.project', ['projects' => $projects]);
    }

    public function add() {
         // Maak een model aan
        $projects = new Project();
        // definieer de velden
        $projects->title = 'mijn titel';
        // sla het model op
        $projects->save();
    }

    public function show(Project $project) {
        dump($project);
        return view('projects.show', ['project'=>$project]);
    }
}
