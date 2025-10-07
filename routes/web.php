<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\AdminPasswordController;



Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/eligibility', [FrontendController::class, 'eligibility'])->name('eligibility');
Route::get('/enroll', [FrontendController::class, 'enroll'])->name('enroll');
Route::get('/payment', [FrontendController::class, 'payment'])->name('payment');
Route::get('/refunds', [FrontendController::class, 'refunds'])->name('refunds');
Route::get('/syllabus', [FrontendController::class, 'syllabus'])->name('syllabus');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');





Auth::routes();

Route::prefix('admin')->middleware(['auth'])->group(function () {
    // ================= Product Management (Admin Role Only) =================
    Route::middleware(['role:admin'])->group(function () {
        // ================= User Management =================
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create')->middleware('permission:create_user');
        Route::post('/users', [UserController::class, 'store'])->name('admin.users.store')->middleware('permission:create_user');
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index')->middleware('permission:users');
        Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit')->middleware('permission:edit_user');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('admin.users.update')->middleware('permission:edit_user');
        Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy')->middleware('permission:delete_users');
        Route::post('/users/update-role', [UserController::class, 'updateRole'])->name('admin.users.updateRole')->middleware('permission:update_users_roles');
    });

    // ================= Permission Management =================
    Route::get('/permissions', [PermissionController::class, 'index'])->name('admin.permissions.index')->middleware('permission:view_permissions');
    Route::get('/permissions/create', [PermissionController::class, 'create'])->name('admin.permissions.create')->middleware('permission:create_permissions');
    Route::post('/permissions', [PermissionController::class, 'store'])->name('admin.permissions.store')->middleware('permission:create_permissions');
    Route::get('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('admin.permissions.edit')->middleware('permission:edit_permissions');
    Route::put('/permissions/{permission}', [PermissionController::class, 'update'])->name('admin.permissions.update')->middleware('permission:update_permissions');
    Route::delete('/permissions/{permission}', [PermissionController::class, 'destroy'])->name('admin.permissions.destroy')->middleware('permission:delete_permissions');

    // ================= Role & Category Management =================
    Route::get('/roles', [RoleController::class, 'index'])
        ->name('admin.roles.index')
        ->middleware('permission:view_roles');

    Route::get('/roles/create', [RoleController::class, 'create'])
        ->name('admin.roles.create')
        ->middleware('permission:create_roles');

    Route::post('/roles', [RoleController::class, 'store'])
        ->name('admin.roles.store')
        ->middleware('permission:create_roles');

    Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])
        ->name('admin.roles.edit')
        ->middleware('permission:edit_roles');

    Route::put('/roles/{id}', [RoleController::class, 'update'])
        ->name('admin.roles.update')
        ->middleware('permission:edit_roles');

    Route::delete('/roles/{id}', [RoleController::class, 'destroy'])
        ->name('admin.roles.destroy');

    Route::get('/roles/{id}/permissions', [RoleController::class, 'assignPermissions'])
        ->name('admin.roles.permissions');

    Route::post('/roles/{id}/permissions', [RoleController::class, 'updatePermissions'])
        ->name('admin.roles.updatePermissions');


    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/dashboard', [DashboardController::class, 'searchFilter'])->name('admin.dashboard.search');
});



Route::get('/change-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('auth.change-password');
Route::post('/new-send-otp', [ForgotPasswordController::class, 'newSentOtp'])->name('auth.newSentOtp');
Route::get('/verify-otp', [ForgotPasswordController::class, 'showVerifyOtpForm'])->name('auth.verifyOtp.form');
Route::post('/verify-otp', [ForgotPasswordController::class, 'verifyOtp'])->name('auth.verifyOtp');
Route::post('/resend-otp', [ForgotPasswordController::class, 'resendOtp'])->name('auth.resendOtp');
Route::get('/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('auth.password.reset.form');
Route::post('/change-password/update', [ForgotPasswordController::class, 'changePasswordUpdate'])->name('auth.change-password-update');


Route::get('/change-password-admin', [AdminPasswordController::class, 'showLinkRequestFormAdmin'])->name('admin.change-password-admin');
Route::post('/new-send-otp-admin', [AdminPasswordController::class, 'newSentOtpAdmin'])->name('admin.newSentOtpAdmin');
Route::get('/verify-otp-admin', [AdminPasswordController::class, 'showVerifyOtpFormAdmin'])->name('admin.verifyOtp.formAdmin');
Route::post('/verify-otp-admin', [AdminPasswordController::class, 'verifyOtpAdmin'])->name('admin.verifyOtpAdmin');
Route::post('/resend-otp-admin', [AdminPasswordController::class, 'resendOtpAdmin'])->name('admin.resendOtpAdmin');
Route::get('/reset-password-admin', [AdminPasswordController::class, 'showResetFormAdmin'])->name('admin.password.reset.formAdmin');
Route::post('/change-password/updateAdmin', [AdminPasswordController::class, 'changePasswordUpdateAdmin'])->name('admin.change-password-updateAdmin');
