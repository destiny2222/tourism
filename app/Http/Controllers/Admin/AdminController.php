<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuildAfrika;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    // buildafrika 
    public function buildafrika(){
        $buildafrika = BuildAfrika::orderBy('id', 'desc')->get();
        return view('admin.buildafrika.index', compact('buildafrika'));
    }


    public function buildafrika_createV(){
        return view('admin.buildafrika.create');
    }


    public function buildafrika_create(Request $request){
        $request->validate([
            'name' => ['nullable','string'],
            'position'=>['nullable','string'],
            'edition' => ['nullable','string'],
            'image' => ['nullable','image','mimes:png,jpg,png,jpeg'],
        ]);

        // if ($request->hasFile('file')) {
        //     $image = $request->file('file');
        //     $extension = $image->getClientOriginalExtension();
        //     $filename =  time() . '.' . $extension;
        //     $image->move(public_path('upload/resume'), $filename);
        // }
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('upload/buildafrika/'), $filename);
        }
        
        $buildafrika = new BuildAfrika();
        $buildafrika->name = $request->name;
        $buildafrika->position = $request->position;
        $buildafrika->edition = $request->edition;
        $buildafrika->image = $filename;
        if($buildafrika->save()){
            return redirect()->route('admin.buildafrika.index')->with('success', 'Created Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function buildafrika_edit($id){
        $buildafrika = BuildAfrika::find($id);
        return view('admin.buildafrika.edit', compact('buildafrika'));
    }


    public function buildafrika_update(Request $request, $id){
        $request->validate([
            'name' => 'nullable|string',
            'position'=>'nullable|string',
            'edition' => 'nullable|string',
            'image' => 'nullable|image|mimes:png,jpg,png,jpeg',
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/buildafrika/', $filename);
            BuildAfrika::where('id', $id)->update(['image' => $filename]);
        }

        $buildafrika = BuildAfrika::find($id);
        $buildafrika->name = $request->name;
        $buildafrika->position = $request->position;
        $buildafrika->edition = $request->edition;
        if($buildafrika->save()){
            return redirect()->back()->with('success', 'BuildAfrika Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function buildafrika_delete($id){
        $buildafrika = BuildAfrika::find($id);
        if($buildafrika->delete()){
            return redirect()->back()->with('success', 'BuildAfrika Deleted Successfully');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }


    public function CourseCategory(){
        $course_category = CourseCategory::orderBy('id', 'desc')->get();
        return view('admin.course_category.index', compact('course_category'));
    }


    public function CourseCateg_createV(){
        return view('admin.course_category.create');
    }


    public function CourseCateg_create(Request $request){
        $request->validate([
            'name'=>['required','string'],
        ]);

        $course_category = new CourseCategory();
        $course_category->name = $request->name;
        $course_category->slug = Str::slug($request->name);
        if($course_category->save()){
            return redirect()->back()->with('success', 'Course Category Created Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function CourseCateg_edit($id){
        $course_category = CourseCategory::find($id);
        return view('admin.course_category.edit', compact('course_category'));
    }


    public function CourseCateg_update(Request $request, $id){
        $request->validate([
            'name'=>['required','string'],
        ]);

        $course_category = CourseCategory::find($id);
        $course_category->name = $request->name;
        $course_category->slug = Str::slug($request->name);
        if($course_category->save()){
            return redirect()->back()->with('success', 'Course Category Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function CourseCateg_delete($id){
        $course_category = CourseCategory::find($id);
        if($course_category->delete())
        {
            return redirect()->back()->with('success', 'Course Category Deleted Successfully');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }

    public function Course(){
        $course = Course::orderBy('id', 'desc')->get();
        return view('admin.course.index', compact('course'));
    }


    public function Course_createV(){
        $coursecategory = CourseCategory::orderBy('id', 'desc')->get();
        return view('admin.course.create', compact('coursecategory'));
    }


    public function Course_create(Request $request){
        $request->validate([
            'name'=>['nullable','string'],
            'description'=>['nullable','string'],
            'image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(320, 220);
            $thumbnail->save(public_path('upload/course/' . $imagePath));
        }

        

        $course = new Course();
        $course->name = $request->name;
        $course->slug = Str::slug($request->name);
        $course->description = $request->description;
        $course->category_id = $request->category_id;
        $course->image = $imagePath;
        if($course->save()){
            return redirect()->route('admin.course.index')->with('success', 'Course Created Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function Course_edit($id){
        $courses = Course::find($id);
        $coursecategory = CourseCategory::with('courses')->get();
        return view('admin.course.edit', compact('courses', 'coursecategory'));
    }


    public function Course_update(Request $request, $id){
        $request->validate([
            'name'=>['nullable','string'],
            'description'=>['nullable','string'],
            'image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        $course = Course::find($id);

        if (!$course) {
            return back()->with('error', 'Course not found');
        }


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(320, 220);
            $thumbnail->save(public_path('upload/course/' . $imagePath));
        }

        $course->name = $request->name;
        $course->slug = Str::slug($request->name);
        $course->description = $request->description;
        $course->category_id = $request->category_id;
        $course->image = $imagePath ?? $course->image;

        if ($course->save()) {
            return redirect()->route('admin.course.index')->with('success', 'Course Updated Successfully');
        } else {
            return back()->with('error', 'Something went wrong');
        }
    }


    public function Course_delete($id){
        $course = Course::find($id);
        if($course->delete()){
            return redirect()->back()->with('success', 'Course Deleted Successfully');
        }else{
         return back()->with('error', 'Something went wrong');
        }
    }   
    
    public function eventPage(){
        $event = Event::orderBy('id', 'asc')->get();
        return view('admin.event.index', compact('event'));
    }

    
    public function event_create(){
        return view('admin.event.create');
    }

    public function event_store(Request $request){
        $request->validate([
            'title'=>['required','string'],
            'date'=>['required','date'],
            'description'=>['required','string'],
            'time'=>['required','string'],
            'image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
            'is_active'=>['nullable','boolean'],
            'is_featured'=>['nullable','boolean'],
            'location'=>['required','string'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/event/' . $imagePath));
        }

        $event = new Event();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->time = $request->time;
        $event->is_active = $request->is_active;
        $event->slug = Str::slug($request->title);
        $event->is_featured = $request->is_featured;
        $event->location = $request->location;
        $event->image = $imagePath;

        if($event->save()){
            return redirect()->route('admin.event.index')->with('success', 'Event Created Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function event_edit($id){
        $events = Event::find($id);
        return view('admin.event.edit', compact('events'));
    }

    public function event_update(Request $request, $id){
        $request->validate([
            'title'=>['required','string'],
            'date'=>['required','date'],
            'description'=>['required','string'],
            'time'=>['required','string'],
            'image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
            'is_active'=>['nullable','boolean'],
            'is_featured'=>['nullable','boolean'],
            'location'=>['required','string'],
        ]);

        // check if image already exists
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/event/' . $imagePath));
        }

        $event = Event::find($id);
        $event->title = $request->title;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->time = $request->time;
        $event->is_active = $request->is_active;
        $event->slug = Str::slug($request->title);
        $event->is_featured = $request->is_featured;
        $event->location = $request->location;
        $event->image = $imagePath ?? $event->image;

        if($event->save()){
            return redirect()->route('admin.event.index')->with('success', 'Event Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function event_delete($id){
        $event = Event::find($id);
        if($event->delete()){
            return redirect()->back()->with('success', 'Event Deleted Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function eventSpeaker(){
        $speaker = Speaker::orderBy('id', 'desc')->get();
        return view('admin.event.speaker.index', compact('speaker'));
    }

    public function eventSpeaker_create(){
        $event = Event::orderBy('id', 'desc')->get();
        return view('admin.event.speaker.create', compact('event'));
    }
    public function eventSpeaker_store(Request $request){
        $request->validate([
            'name'=>['required','string'],
            'position'=>['required','string'],
            'image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/event/speaker/' . $imagePath));
        }

        $speaker = new Speaker();
        $speaker->name = $request->name;
        $speaker->position = $request->position;
        $speaker->event_id = $request->event_id;
        // $speaker->slug = Str::slug($request->name);
        $speaker->image = $imagePath;

        if($speaker->save()){
            return redirect()->route('admin.event.speaker.index')->with('success', 'Speaker Added Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function eventSpeaker_edit($id){
        $speaker = Speaker::find($id);
        $event = Event::orderBy('id', 'desc')->get();
        return view('admin.event.speaker.edit', compact('speaker', 'event'));
    }

    public function eventSpeaker_update(Request $request, $id){
        $request->validate([
            'name'=>['required','string'],
            'position'=>['required','string'],
            'image'=>['nullable','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        // check if image exist
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 300);
            $thumbnail->save(public_path('upload/event/speaker/' . $imagePath));
        }

        $speaker = Speaker::find($id);
        $speaker->name = $request->name;
        $speaker->position = $request->position;
        $speaker->event_id = $request->event_id;
        // $speaker->slug = Str::slug($request->name);
        $speaker->image = $imagePath ?? $speaker->image;

        if($speaker->save()){
            return redirect()->route('admin.event.speaker.index')->with('success', 'Speaker Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function eventSpeaker_delete($id){
        $speaker = Speaker::find($id);
        if($speaker->delete()){
            return redirect()->back()->with('success', 'Speaker Deleted Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function Partner(){
        $partner = Partner::orderBy('id', 'desc')->get();
        return view('admin.partner.index', compact('partner'));
    }

    public function partner_create(){
        return view('admin.partner.create');
    }

    public function partner_store(Request $request){
        $request->validate([
            'image'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);


        // check if image exist
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(500, 500);
            $thumbnail->save(public_path('upload/partner/' . $imagePath));
        }
        $partner = new Partner();
        $partner->image = $imagePath;
        if($partner->save()){
            return redirect()->route('admin.partner.index')->with('success', 'Partner Added Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function partner_edit($id){
        $partner = Partner::find($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function partner_update(Request $request, $id){
        $request->validate([
            'image'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
        
        // check if image exist
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(500, 500);
            $thumbnail->save(public_path('upload/partner/' . $imagePath));
        }

        $partner = Partner::find($id);
        $partner->image = $imagePath ?? $partner->image;
        if($partner->save()){
            return redirect()->route('admin.partner.index')->with('success', 'Partner Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function partner_delete($id){
        $partner = Partner::find($id);
        if($partner->delete()){
            return redirect()->back()->with('success', 'Partner Deleted Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }


    public function gallery(){
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    public function gallery_create(){
        return view('admin.gallery.create');
    }

    public function gallery_store(Request $request){
        $request->validate([
            'image'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

         // check if image exist
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 320);
            $thumbnail->save(public_path('upload/gallery/' . $imagePath));
        }

        $gallery = new Gallery();
        $gallery->image = $imagePath;
        if($gallery->save()){
            return redirect()->route('admin.gallery.index')->with('success', 'Gallery Added Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    public function gallery_edit($id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function gallery_update(Request $request, $id){
        $request->validate([
            'image'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        // check if image exist
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imagePath = time().'.'.$extension;

            $thumbnail = Image::make($image)->resize(300, 320);
            $thumbnail->save(public_path('upload/gallery/' . $imagePath));
        }

        $gallery = Gallery::find($id);
        $gallery->image = $imagePath ?? $gallery->image;
        if($gallery->save()){
            return redirect()->route('admin.gallery.index')->with('success', 'Gallery Updated Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }



    public function gallery_delete($id){
        $gallery = Gallery::find($id);
        if($gallery->delete()){
            return redirect()->back()->with('success', 'Gallery Deleted Successfully');
        }else{
            return back()->with('error', 'Something went wrong');
        }
    }

    // team 
    

    public function post(){
        $posts = Post::orderBy('id', 'desc')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function post_create(){
        return view('admin.post.create');
    }
//     image
// title
// description
// slug
// tag_id
// category_id

    public function post_store(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>['required','image', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        
    }

}
