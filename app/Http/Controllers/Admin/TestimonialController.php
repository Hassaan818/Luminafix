<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialAddRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $testimonialView = 'admin.testimonials.';
    public function index()
    {
        $testimonials = Testimonial::where('status', 1)->get();
        return view($this->testimonialView.'index',[
            'testimonials' => $testimonials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view($this->testimonialView.'add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialAddRequest $request)
    {
        $validatedData = $request->validated();
        $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['image']->getClientOriginalName());
        $validatedData['image']->storeAs('main_testimonials_uploads', $filename, 'public');
        $validatedData['image'] =  $filename;
        $updatedRequest = array_merge(
            $validatedData, 
            [
            'created_by' => auth()->user()->id,
            'slug' => Testimonial::generateSlug($validatedData['title'])
        ]);
        Testimonial::create($updatedRequest);
        return to_route('admin.testimonials.index')->with('message', 'Testimonial created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $slug)
    {
        return view($this->testimonialView.'show',[
            'testimonial' => $slug
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $slug)
    {
        return view($this->testimonialView.'edit',[
            'testimonial' => $slug
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialUpdateRequest $request, Testimonial $slug)
    {
        $validatedData = $request->validated();
        if (isset($validatedData['image']) && $validatedData['image']->getClientOriginalName()) {
            if (isset($slug->image) && !empty($slug->image)) {
                Storage::delete('/public/main_testimonials_uploads/' . $slug->image);
            }
            $filename = time() . rand(1, 100) . '_' . str_replace(['"', "'"], "", $validatedData['image']->getClientOriginalName());
            $validatedData['image']->storeAs('main_testimonials_uploads', $filename, 'public');
            $validatedData['image'] =  $filename;
        }
        $updatedRequest = array_merge(
            $validatedData,
            [
                'updated_by' => auth()->user()->id,
                'slug' => Str::of($validatedData['title'])->slug('-'),
            ],
        );
        $slug->update($updatedRequest);
        return to_route('admin.testimonials.index')->with('message', 'Testimonial updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $slug)
    {
        $slug->delete();
        return to_route('admin.testimonials.index')->with('message', 'Testimonial deleted');

    }
}
