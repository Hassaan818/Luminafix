<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectAddRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $projectView = 'admin.projects.';
    public function index()
    {
        $projects = Project::orderBy('created_at')->get();
        return view($this->projectView.'index',[
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->projectView.'add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectAddRequest $request)
    {
        $validatedData = $request->validated();
        $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['image']->getClientOriginalName());
        $validatedData['image']->storeAs('main_projects_uploads', $filename, 'public');
        $validatedData['image'] =  $filename;
        $updatedRequest = array_merge(
            $validatedData,
            [
                'created_by' => auth()->user()->id,
            ]
        );
        Project::create($updatedRequest);
        return to_route('admin.projects.index')->with('message', 'Project created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view($this->projectView.'show',[
            'project' => $project
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view($this->projectView.'edit',[
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $validatedData = $request->validated();
        if (isset($validatedData['image']) && $validatedData['image']->getClientOriginalName()) {
            if (isset($project->image) && !empty($project->image)) {
                Storage::delete('/public/main_projects_uploads/' . $project->image);
            }
            $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['image']->getClientOriginalName());
            $validatedData['image']->storeAs('main_projects_uploads', $filename, 'public');
            $validatedData['image'] =  $filename;
        }
        $updatedRequest = array_merge(
            $validatedData,
            [
                'updated_by' => auth()->user()->id,
            ],
        );
        $project->update($updatedRequest);
        return to_route('admin.projects.index')->with('message', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return to_route('admin.projects.index')->with('message', 'Project deleted successfully');
    }
}
