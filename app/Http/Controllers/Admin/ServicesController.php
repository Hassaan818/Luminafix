<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceAddRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $servicesView = 'admin.services.';
    public function index()
    {
        $services = Service::orderBy('created_at')->get();
        return view($this->servicesView . 'index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->servicesView . 'add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceAddRequest $request)
    {
        $validatedData = $request->validated();
        $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['logo']->getClientOriginalName());
        $validatedData['logo']->storeAs('main_services_uploads', $filename, 'public');
        $validatedData['logo'] =  $filename;
        $updatedRequest = array_merge(
            $validatedData,
            [
                'created_by' => auth()->user()->id,
                'slug' => Service::generateSlug($validatedData['title']),
            ]
        );
        Service::create($updatedRequest);
        return to_route('admin.services.index')->with('message', 'Service created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $slug)
    {
        return view($this->servicesView.'show',[
            'service' => $slug
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $slug)
    {
        return view($this->servicesView.'edit',[
            'service' => $slug,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceUpdateRequest $request, Service $slug)
    {
        $validatedData = $request->validated();
        if (isset($validatedData['logo']) && $validatedData['logo']->getClientOriginalName()) {
            if (isset($slug->logo) && !empty($slug->logo)) {
                Storage::delete('/public/main_services_uploads/' . $slug->logo);
            }
            $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['logo']->getClientOriginalName());
            $validatedData['logo']->storeAs('main_services_uploads', $filename, 'public');
            $validatedData['logo'] =  $filename;
        }
        $updatedRequest = array_merge(
            $validatedData,
            [
                'updated_by' => auth()->user()->id,
                'slug' => Str::of($validatedData['title'])->slug('-'),
            ],
        );
        $slug->update($updatedRequest);
        return to_route('admin.services.index')->with('message', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $slug)
    {
       $slug->delete();
       return to_route('admin.services.index')->with('message', 'Service deleted successfully');
    }
}
