<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //
    // }

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
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', [
            'setting' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingUpdateRequest $request, Setting $setting)
    {
        $validatedData = $request->validated();
        if (isset($validatedData['logo']) && $validatedData['logo']->getClientOriginalName())
        {
            if (isset($setting->logo) && !empty($setting->logo))
            { 
                Storage::delete('/public/main_settings_uploads/'.$setting->logo);
            }
            $filename = time().rand(1,100).'_'.str_replace(['"',"'"], "", $validatedData['logo']->getClientOriginalName());
            $validatedData['logo']->storeAs('main_settings_uploads',$filename,'public');
            $validatedData['logo'] =  $filename;
        }

        if (isset($validatedData['favicon']) && $validatedData['favicon']->getClientOriginalName())
        {
            if (isset($setting->favicon) && !empty($setting->favicon))
            { 
                Storage::delete('/public/main_settings_uploads/'.$setting->favicon);
            }
            $filename = time().rand(1,100).'_'.str_replace(['"',"'"], "", $validatedData['favicon']->getClientOriginalName());
            $validatedData['favicon']->storeAs('main_settings_uploads',$filename,'public');
            $validatedData['favicon'] =  $filename;
        }

        $updatedRequest = array_merge(
            $validatedData,
            [
                'updated_by' => auth()->user()->id,
            ],
        );

        $setting->update($updatedRequest);
        return to_route('admin.settings.edit', [$setting])
                ->with('message','Settings is updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
