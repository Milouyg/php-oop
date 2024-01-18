<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dump( $request->all() );
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectAdminController $projectAdminController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectAdminController $projectAdminController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProjectAdminController $projectAdminController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectAdminController $projectAdminController)
    {
        //
    }
}
