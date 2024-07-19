<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillAddRequest;
use App\Http\Requests\SkillUpdateRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $skillView = 'admin.skills.';
    public function index()
    {
        $skills = Skill::paginate(10);
        return view($this->skillView. 'index',[
            'skills' => $skills
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->skillView.'add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillAddRequest $request)
    {
        $validatedData = $request->validated();
        Skill::create($validatedData);
        return to_route('admin.skills.index')->with('message', 'Skill created successfully');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view($this->skillView.'edit',[
            'skill' => $skill
        ]);        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillUpdateRequest $request, Skill $skill)
    {
        $validatedData = $request->validated();
        $skill->update($validatedData);
        return to_route('admin.skills.index')->with('message', 'Skill updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return to_route('admin.skills.index')->with('message', 'Skill deleted successfully');
    }
}
