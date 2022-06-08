<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\DashboardMomentum;
use App\Http\Livewire\DashboardMomentum2;

//startAdd
use App\Http\Livewire\Data;
use App\Http\Livewire\ListContent;
use App\Http\Livewire\ContentManagement;
use App\Http\Livewire\UserManagements\UserProfile;
use App\Http\Livewire\UserManagements\UserManagement;

use Illuminate\Http\Request;

Route::get('/', Login::class)->name('login');
Route::get('/dashboard/guest', DashboardMomentum2::class)->name('dash');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

// content CRUD
Route::post('/content-management/create', [ContentManagement::class, 'create']);
Route::get('/content-management/edit/{id}', [ContentManagement::class, 'edit'])->name('content-edit');
Route::post('/content-management/update/{id}', [ContentManagement::class, 'update']);

Route::middleware('auth')->group(function () {
    //startAdd
    Route::get('/list-content', ListContent::class)->name('list-content');
    Route::get('/employee/edit/content/{id}', [Data::class, 'data_edit']);
    Route::post('/employee/update/content/{id}', [Data::class, 'data_update']);
    Route::get('/dashboard-momentum', DashboardMomentum::class)->name('dashboard-momentum');
    //finishAdd
    
    Route::get('/user-profile', UserProfile::class)->name('user-profile');
    Route::get('/user-management', UserManagement::class)->name('user-management');
    Route::get('/content-management', ContentManagement::class)->name('content-management');
});

