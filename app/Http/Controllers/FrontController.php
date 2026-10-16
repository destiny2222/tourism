<?php

namespace App\Http\Controllers;

use App\Mail\AdteaInquiryMail;
use App\Models\AdteaInquiry;
use App\Models\BuildAfrika;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function index(){
        $post = Post::orderBy('id', 'desc')->paginate(6);
        $event = Event::orderBy('id', 'desc')->paginate(6);
        $course = Course::orderBy('id', 'desc')->paginate(6);
        $partner = Partner::all();
        $gallery = Gallery::orderBy('id', 'desc')->get();
        return view('frontend.index', compact('event', 'course', 'post', 'partner', 'gallery'));
    }

    public function event(){
        $event = Event::orderBy('id', 'desc')->paginate(6);
        $recentevent = Event::latest()->paginate(6);
        return view('frontend.event', compact('event', 'recentevent'));
    }

    public function eventDetails(Event $event){
        // recent event
        $recentevent = Event::latest()->paginate(3);
        return view('frontend.event_details', compact('event', 'recentevent'));
    }

    public function postDetails(Post $post){
        // recent post
        $recent = Post::latest()->paginate(3);
        $categories = Category::orderBy('id', 'desc')->get();
        $tags =  Tag::orderBy('id', 'desc')->get();
        return view('frontend.blog-details', compact('post', 'recent', 'categories','tags'));
    }

    public function about(){
        $team = Team::orderBy('id', 'desc')->get();
        $partner = Partner::orderBy('id', 'desc')->get();
        return view('frontend.about', compact('team', 'partner'));
    }

    public function services(){
        return view('frontend.service');
    }

    public function adtea(){
        return view('frontend.adtea');
    }

    public function adteaRegister(){
        return view('frontend.adtea-register');
    }

    public function storeAdteaInquiry(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'type' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        $inquiry = AdteaInquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type,
            'message' => $request->message,
            'status' => 'pending',
        ]);

        // Send email notification to admin email
        try {
            Mail::to('info@tourismafrikanianig.com')->send(new AdteaInquiryMail($inquiry));
        } catch (\Exception $e) {
            Log::error('ADTEA Mail Notification Failed: ' . $e->getMessage());
        }

        return redirect()->to(route('adtea-page') . '#sponsor-inquiry')
            ->with('success', 'Thank you! Your ADTEA partnership inquiry has been submitted successfully. Our team will review your request and get in touch with you shortly.');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function gallery(){
        $gallery = Gallery::paginate(10);
        return view('frontend.gallery', compact('gallery'));
    }

    public function blog(){
        $post = Post::orderBy('id', 'desc')->paginate(6);
        $recent = Post::latest()->paginate(5);
        $categories = Category::all();
        $tags = Tag::all();
        return view('frontend.blog', compact('post', 'recent', 'categories', 'tags'));
    }

 

    public function registerPage(){
        return view('frontend.event_register');
    }

    public function course(){
        $course = Course::paginate(6);
        return view('frontend.course', compact('course'));
    }

    public function showByCategory(CourseCategory $Coursecategory){
        $courses = $Coursecategory->courses()->paginate(10);
        return view('frontend.showcourse-category', compact('Coursecategory', 'courses'));
    }

    public function courseDetails(Course $course){
        $recent = Course::latest()->paginate(3);
        return view('frontend.course_details', compact('course', 'recent'));
    }


    public function buildafrika(){
        $winners = BuildAfrika::all();
        return view('frontend.buildafrika', compact('winners'));
    }

    public function community(){
        return view('frontend.community');
    }


    public function registeration(){
        return view('frontend.register');
    }

    public function register1(){
        return view('frontend.register_free');
    } 
    public function register2(){
        return view('frontend.register_1');
    } 
    public function register3(){
        return view('frontend.register_2');
    } 
    public function register4(){
        return view('frontend.register_3');
    } 

    // search functionality
    public function search(Request $request){
        $search = $request->search;
        $course = Course::where('name', 'LIKE', "%$search%")->orWhere('description', 'LIKE', "%$search%")->paginate(6);
        return view('frontend.course', compact('course'));
    }

}
