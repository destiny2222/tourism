<?php

use App\Http\Controllers\EventRegistrationController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('', [FrontController::class, 'index'])->name('home-page');
Route::get('/about',[FrontController::class, 'about'])->name('about-page');
Route::get('/blog',[FrontController::class, 'blog'])->name('blog-page');
Route::get('/event',[FrontController::class, 'event'])->name('event-page');
Route::get('/community',[FrontController::class, 'community'])->name('community-page');
Route::get('/contact',[FrontController::class, 'contact'])->name('contact-page');
Route::get('/buildafrika',[FrontController::class, 'buildafrika'])->name('buildafrika-page');
Route::get('/gallery',[FrontController::class, 'gallery'])->name('gallery-page');
Route::get('/course',[FrontController::class, 'course'])->name('course-page');
Route::get('/courses/{Coursecategory}',[FrontController::class, 'showByCategory'])->name('courses.showByCategory');
Route::get('/service',[FrontController::class, 'services'])->name('service-page');
Route::get('/adtea',[FrontController::class, 'adtea'])->name('adtea-page');
Route::get('/adtea/register',[FrontController::class, 'adteaRegister'])->name('adtea.register');
Route::post('/adtea/inquiry', [FrontController::class, 'storeAdteaInquiry'])->name('adtea.inquiry.store');

// ADTEA Event Attendee Registration CRUD Routes
Route::post('/adtea/registration', [EventRegistrationController::class, 'store'])->name('adtea.registration.store');
Route::get('/adtea/registrations', [EventRegistrationController::class, 'index'])->name('adtea.registrations.index');
Route::post('/adtea/registrations', [EventRegistrationController::class, 'store'])->name('adtea.registrations.store');
Route::get('/adtea/registrations/{eventRegistration}', [EventRegistrationController::class, 'show'])->name('adtea.registrations.show');
Route::put('/adtea/registrations/{eventRegistration}', [EventRegistrationController::class, 'update'])->name('adtea.registrations.update');
Route::delete('/adtea/registrations/{eventRegistration}', [EventRegistrationController::class, 'destroy'])->name('adtea.registrations.destroy');
Route::get('event/details/{event}', [FrontController::class, 'eventDetails'])->name('event-details');
Route::get('blog/details/{post}', [FrontController::class, 'postDetails'])->name('post-details');
Route::get('course/details/{course}', [FrontController::class, 'courseDetails'])->name('course-details');
Route::get('event/registration', [FrontController::class,'registerPage'])->name('event-registration');
Route::post('event/registration/store', [PaymentController::class, 'ahteStore'])->name('registration.payment');
Route::post('event/registration/payment/initialize', [PaymentController::class, 'initialize'])->name('registration.payment.initialize');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::get('/registration/AHTES26', [FrontController::class, 'registeration'])->name('register-page');
Route::get('/registration/AHTES26/visitor', [FrontController::class, 'register1'])->name('register-visitor');
Route::get('/registration/AHTES26/regular-delegate', [FrontController::class, 'register2'])->name('register-regular');
Route::get('/registration/AHTES26/delegate', [FrontController::class, 'register3'])->name('register-delegate');
Route::get('/registration/AHTES26/premium-delegate', [FrontController::class, 'register4'])->name('register-premium');
Route::get('/search', [FrontController::class,'search'])->name('search');

Route::get('/contestant', [VoteController::class, 'contestant'])->name('contestant');
Route::get('/contestant/{contestant}', [VoteController::class, 'contestantDetails'])->name('contestant.details');
Route::post('/vote/{id}', [VoteController::class, 'initiate'])->name('vote.initiate');
Route::get('/vote/callback', [VoteController::class, 'callback'])->name('vote.callback');
// require __DIR__.'/admin.php';
// require __DIR__.'/auth.php';
// Auth::routes();
