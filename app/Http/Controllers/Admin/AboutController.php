<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $aboutView = 'admin.about.';
    // public function index()
    // {
    //     $abouts = About::active()->get();
    //     return view($this->aboutView.'index', [
    //         'abouts' => $abouts
    //     ]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view($this->aboutView.'create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(AboutStoreRequest $request)
    // {
    //     $validatedData = $request->validated();
    //     $filename = time().rand(1,100).'_'.str_replace(['"',"'"], "", $validatedData['image']->getClientOriginalName());
    //     $validatedData['image']->storeAs('main_abouts_uploads',$filename,'public');
    //     $validatedData['image'] =  $filename;
    //     $updatedRequest = array_merge(
    //         $validatedData, [
    //             'created_by' => auth()->user()->id,
    //         ]
    //         );
    //     About::create($updatedRequest) ;
    //     return to_route('admin.abouts.create')->with('message', 'About created');
    // }

    /**
     * Display the specified resource.
     */
    // public function show(About $about)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view($this->aboutView.'edit', [
            'abouts' => $about
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUpdateRequest $request, About $about)
    {
        $validatedData = $request->validated();
        if(isset($validatedData['image'])&& $validatedData['image']->getClientOriginalName())
            {
                if (isset($about->image) && !empty($about->image))
                { 
                    Storage::delete('/public/main_abouts_uploads/'.$about->image);
                }
                $filename = time().rand(1,100).'_'.str_replace(['"',"'"], "", $validatedData['image']->getClientOriginalName());
                $validatedData['image']->storeAs('main_abouts_uploads',$filename,'public');
                $validatedData['image'] =  $filename;
            }
            $updatedRequest = array_merge(
                $validatedData,
                [
                    'updated_by' => auth()->user()->id,
                ],
            );
            $about->update($updatedRequest);
            return to_route('admin.abouts.edit',['about' => $about])->with('message','About updated');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(About $about)
    // {
    //     $about->delete();
    //     return to_route('admin.abouts.index')->with('message', 'About Deleted Successfully');
    // }
}
