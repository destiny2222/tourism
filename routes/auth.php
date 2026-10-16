<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\SchoolAdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->group(function () {
    Route::middleware(['verified', 'role:lecture'])->group(function (){
        Route::get('/lecture', [InstructorController::class, 'index'])->name('dashboard.instructor');
    });
    
    Route::middleware(['verified', 'role:student'])->group(function () {
        Route::get('', [HomeController::class, 'index'])->name('dashboard.student');
    });

    // School Administrator role
    Route::middleware(['verified', 'role:school'])->group(function () {
        Route::get('/school', [SchoolAdminController::class, 'index'])->name('dashboard.school');
        Route::get('/facility/upload', [SchoolAdminController::class,  'page'])->name('school-upload');
        Route::post('/school/upload/store', [SchoolAdminController::class,  'store'])->name('school-upload-store');
        Route::get('/edit/{id}/facility', [SchoolAdminController::class, 'edit'])->name('school-upload-edit');
        Route::put('/update/{id}/facility', [SchoolAdminController::class, 'update'])->name('school-upload-update');
        Route::delete('/delete/{id}/facility', [SchoolAdminController::class, 'delete'])->name('school-upload-delete');
    });
});