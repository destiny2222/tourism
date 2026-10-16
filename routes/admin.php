<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\ClearCacheController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;




// Route::prefix('admin')->name('admin.')->group(function (){
//     Route::controller(LoginController::class)->group(function (){
//         Route::get('login-form','showLoginForm')->name('login-Form');
//         Route::post('login','login')->name('login');
//         Route::post('logout','logout')->name('logout');
//     });
//     Route::get('', [ HomeController::class,'home' ])->name('home');
//     // Edit profile routes
//     Route::get('/profile', [HomeController::class, 'profile'])->name('profile-page');
//     Route::put('/profile_update/{id}', [HomeController::class, 'update'])->name('update-profile-page');
//     Route::put('change-password', [HomeController::class, 'validatepassword'])->name('change-password-page');

//     // buildafrika routes
//     Route::get('buildafrika', [AdminController::class, 'buildafrika'])->name('buildafrika.index');
//     Route::get('buildafrika/create', [AdminController::class,'buildafrika_createV'])->name('buildafrika.create');
//     Route::post('buildafrika/store', [AdminController::class, 'buildafrika_create'])->name('buildafrika.store');
//     Route::get('buildafrika/{id}/edit', [AdminController::class, 'buildafrika_edit'])->name('buildafrika.edit');
//     Route::put('buildafrika/{id}/update', [AdminController::class,'buildafrika_update'])->name('buildafrika.update');
//     Route::delete('buildafrika/{id}/delete', [AdminController::class,'buildafrika_delete'])->name('buildafrika.delete');

//     // course category
//     // Route::get('course/category', [AdminController::class, 'CourseCategory'])->name('course.category.index');
//     // Route::get('course/category/create', [AdminController::class, 'CourseCateg_createV'])->name('course.category.create');
//     // Route::post('course/category/store', [AdminController::class, 'CourseCateg_create'])->name('course.category.store');
//     // Route::get('course/category/{id}/edit', [AdminController::class, 'CourseCateg_edit'])->name('course.category.edit');
//     // Route::put('course/category/{id}/update', [AdminController::class, 'CourseCateg_update'])->name('course.category.update');
//     // Route::delete('course/category/{id}/delete', [AdminController::class, 'CourseCateg_delete'])->name('course.category.delete');

//     // Course
//     Route::get('course', [AdminController::class, 'Course'])->name('course.index');
//     Route::get('course/create', [AdminController::class, 'Course_createV'])->name('course.create');
//     Route::post('course/store', [AdminController::class, 'Course_create'])->name('course.store');
//     Route::get('course/{id}/edit', [AdminController::class, 'Course_edit'])->name('course.edit');
//     Route::put('course/{id}/update', [AdminController::class, 'Course_update'])->name('course.update');
//     Route::delete('course/{id}/delete', [AdminController::class, 'Course_delete'])->name('course.delete');

//     // event 
//     Route::get('event', [AdminController::class, 'eventPage'])->name('event.index');
//     Route::get('event/create', [AdminController::class, 'event_create'])->name('event.create');
//     Route::post('event/store', [AdminController::class, 'event_store'])->name('event.store');
//     Route::get('event/{id}/edit', [AdminController::class, 'event_edit'])->name('event.edit');
//     Route::put('event/{id}/update', [AdminController::class, 'event_update'])->name('event.update');
//     Route::delete('event/{id}/delete', [AdminController::class, 'event_delete'])->name('event.delete');

//     // event speaker
//     Route::get('event/speaker', [AdminController::class, 'eventSpeaker'])->name('event.speaker.index');
//     Route::get('event/speaker/create', [AdminController::class, 'eventSpeaker_create'])->name('event.speaker.create');
//     Route::post('event/speaker/store', [AdminController::class, 'eventSpeaker_store'])->name('event.speaker.store');
//     Route::get('event/speaker/{id}/edit', [AdminController::class, 'eventSpeaker_edit'])->name('event.speaker.edit');
//     Route::put('event/speaker/{id}/update', [AdminController::class, 'eventSpeaker_update'])->name('event.speaker.update');
//     Route::delete('event/speaker/{id}/delete', [AdminController::class, 'eventSpeaker_delete'])->name('event.speaker.delete');

//     // partner
//     Route::get('partner', [AdminController::class, 'Partner'])->name('partner.index');
//     Route::get('partner/create', [AdminController::class, 'partner_create'])->name('partner.create');
//     Route::post('partner/store', [AdminController::class, 'partner_store'])->name('partner.store');
//     Route::get('partner/{id}/edit', [AdminController::class, 'partner_edit'])->name('partner.edit');
//     Route::put('partner/{id}/update', [AdminController::class, 'partner_update'])->name('partner.update');
//     Route::delete('partner/{id}/delete', [AdminController::class, 'partner_delete'])->name('partner.delete');

//     // Gallery
//     Route::get('gallery', [AdminController::class,'gallery'])->name('gallery.index');
//     Route::get('gallery/create', [AdminController::class,'gallery_create'])->name('gallery.create');
//     Route::post('gallery/store', [AdminController::class,'gallery_store'])->name('gallery.store');
//     Route::get('gallery/{id}/edit', [AdminController::class,'gallery_edit'])->name('gallery.edit');
//     Route::put('gallery/{id}/update', [AdminController::class,'gallery_update'])->name('gallery.update');
//     Route::delete('gallery/{id}/delete', [AdminController::class,'gallery_delete'])->name('gallery.delete');

//     // news
//     // Route::get('news', [AdminController::class, 'News'])->name('news.index');
//     // Route::get('news/create', [AdminController::class, 'News_createV'])->name('news.create');
//     // Route::post('news/store', [AdminController::class, 'News_create'])->name('news.store');
//     // Route::get('news/{id}/edit', [AdminController::class, 'News_edit'])->name('news.edit');
//     // Route::put('news/{id}/update', [AdminController::class, 'News_update'])->name('news.update');
//     // Route::get('news/{id}/delete', [AdminController::class, 'News_delete'])->name('news.delete');
    
//     // clear cache
//     Route::get('clearcache', [ClearCacheController::class, 'clearcache'])->name('clearcache');
// });





?>