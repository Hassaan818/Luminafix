<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamAddRequest;
use App\Http\Requests\TeamUpdateRequest;
use App\Models\Skill;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $teamView = 'admin.teams.';
    public function index()
    {
        $teams = Team::where('status', 1)->get();
        return view($this->teamView . 'index', [
            'teams' => $teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skills = Skill::get();
        return view($this->teamView . 'add', [
            'skills' => $skills
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamAddRequest $request)
    {
        $validatedData = $request->validated();
        $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['image']->getClientOriginalName());
        $validatedData['image']->storeAs('main_teams_uploads', $filename, 'public');
        $validatedData['image'] =  $filename;
        $skills = $validatedData['skills'];
        unset($validatedData['skills']);
        $updatedRequest = array_merge(
            $validatedData,
            [
                'created_by' => auth()->user()->id,
                'slug' => Team::generateSlug($validatedData['name'])
            ]
        );
        $team = Team::create($updatedRequest);
        if ($request->has('skills')) {
            $team->skills()->sync($request->skills);
        }
        return to_route('admin.teams.index')->with('message', 'Team member created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $slug)
    {
        $skills = Skill::get();
        return view($this->teamView . 'show', [
            'skills' => $skills,
            'team' => $slug
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $slug)
    {
        $skills = Skill::get();
        return view($this->teamView . 'edit', [
            'skills' => $skills,
            'team' => $slug
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamUpdateRequest $request, Team $slug)
    {
        $validatedData = $request->validated();
        if (isset($validatedData['image']) && $validatedData['image']->getClientOriginalName()) {
            if (isset($slug->image) && !empty($slug->image)) {
                Storage::delete('/public/main_teams_uploads/' . $slug->image);
            }
            $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['image']->getClientOriginalName());
            $validatedData['image']->storeAs('main_teams_uploads', $filename, 'public');
            $validatedData['image'] =  $filename;
        }
        $skills = $validatedData['skills'];
        unset($validatedData['skills']);
        $updatedRequest = array_merge(
            $validatedData,
            [
                'updated_by' => auth()->user()->id,
                'slug' => Str::of($validatedData['name'])->slug('-'),
            ],
        );
        $slug->update($updatedRequest);
        if ($request->has('skills')) {
            $slug->skills()->sync($request->skills);
        }
        return to_route('admin.teams.index')->with('message', 'Team member updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $slug)
    {
        $slug->delete();
        return to_route('admin.teams.index')->with('message', 'Team member deleted');
    }
}
