<?php

namespace App\Http\Controllers;

use App\Models\FacilityPhoto;
use App\Models\SchoolFacility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class SchoolAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('school.index');
    }


    public function page(){
        return view('school.add');
    }
  
    public function store(Request $request){
        $request->validate([ 
            'name'=>['nullable', 'string'],
            'description'=>['nullable', 'string'],
            'email'=>['nullable', 'string'],
            'phone'=>['nullable', 'string'],
            // 'image'=>['nullable',   'mimes:jpeg,png,jpg'],
            'facebook'=>['nullable', 'string'],
            'instagram'=>['nullable', 'string'],
            'whatsapp'=>['nullable', 'string'],
        ]);

        dd($request->all());

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/facility/' . $imagePath));
        }

        $school = new SchoolFacility;
        $school->name = $request->name;
        $school->slug = Str::slug($request->name);
        $school->description = $request->description;
        $school->phone = $request->phone;
        $school->facebook = $request->facebook;
        $school->instagram = $request->instagram;
        $school->whatsapp = $request->whatsapp;
        $school->image = $imagePath;
        $school->user_id = auth()->user()->id;

        if($school->save()){
            return redirect()->route('school-upload')->with('success',  'Uploaded Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }

    }


    public function edit($id){
        $school = SchoolFacility::find($id);
        return view('school.edit', compact('school'));
    }


    public function update(Request $request, $id){
        $request->validate([ 
            'name'=>['nullable', 'string'],
            'description'=>['nullable', 'string'],
            'email'=>['nullable', 'string'],
            'phone'=>['nullable', 'string'],
            'image'=>['nullable', 'image', 'mimes:jpeg,png,jpg'],
            'facebook'=>['nullable', 'string'],
            'instagram'=>['nullable', 'string'],
            'whatsapp'=>['nullable', 'string'],
        ]);

        // 

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/facility/' . $imagePath));
        }

        $school =  SchoolFacility::find($id);
        $school->name = $request->input('name');
        $school->slug = Str::slug($request->input('name'));
        $school->description = $request->input('description');
        $school->phone = $request->input('phone');
        $school->facebook = $request->input('facebook');
        $school->instagram = $request->input('instagram');
        $school->whatsapp = $request->input('whatsapp');
        $school->image = $imagePath ?? $school->image;
        $school->user_id = auth()->user()->id;

        if($school->save()){
            return back()->with('success', 'Updated Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }

    }

    public function delete($id){
        $school = SchoolFacility::find($id);
        if($school->save()){
            return back()->with('success', 'Delete Successful');
        }else{
            return back()->with('error', 'Something went worry');
        }
    }

    // storing for photo
    
    public function photo(){
        $photo = FacilityPhoto::orderBy('id', 'desc')->get();
        return view('', compact('photo'));
    }

    public function createPhoto(){
        $facility = SchoolFacility::orderBy('id', 'desc')->get();
        return view('', compact('facility'));
    }


    public function storePhoto(Request $request)
    {
        $request->validate([ 
            'images.*' => ['image', 'mimes:png,jpg,jpeg,pdf']
        ]);
    
        $urls = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $ext = $image->getClientOriginalExtension();
                $fileName = substr(rand(1, 9000000000000) . time(), 2);
                $fileNameToStore = $fileName . '.' . $ext;
                $thumbnail = Image::make($image)->resize(7311, 4873);
                $thumbnail->save(public_path('upload/facility/photo/' . $fileNameToStore));
                $urls[] = $fileNameToStore;
            }
        }
    
        $photo = new FacilityPhoto;
        $photo->image = $urls; // Store URLs 
        $photo->facility_id = $request->facility_id;
        $photo->user_id = auth()->user()->id;
    
        if ($photo->save()) {
            return redirect()->route('school-upload')->with('success', 'Uploaded Successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }


    public function updatePhoto(Request $request, $id)
{
    $request->validate([
        // 'images' => ['nullable', 'array'],
        'images.*' => ['image', 'mimes:png,jpg,jpeg,pdf']
    ]);

    $photo = FacilityPhoto::findOrFail($id);

    // Delete old images if new images are uploaded
    if ($request->hasFile('images')) {
        foreach ($photo->images as $image) {
            // Delete image file from storage
            $imagePath = public_path('upload/facility/photo/' . $image->image_url);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            // Delete image record from the database
            $image->delete();
        }
    }

    $urls = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $ext = $image->getClientOriginalExtension();
            $fileName = substr(rand(1, 9000000000000) . time(), 2);
            $fileNameToStore = $fileName . '.' . $ext;
            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/facility/photo/' . $fileNameToStore));
            $urls[] = $fileNameToStore;
        }
    }

    if (!empty($urls)) {
        foreach ($urls as $url) {
            $photo->images()->create(['image' => $url]);
        }
    }

    $photo->facility_id = $request->facility_id;
    $photo->user_id = auth()->user()->id;

    if ($photo->save()) {
        return redirect()->route('school-upload')->with('success', 'Updated Successfully');
    } else {
        return back()->with('error', 'Something went wrong');
    }
}

    

    public function editPhoto($id){
        $photo = FacilityPhoto::find($id);
        return view('', compact('photo'));
    }

}