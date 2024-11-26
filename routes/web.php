<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DentalOfficesController;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductCatalogueController;
use App\Http\Controllers\ProductsStatusController;
use App\Http\Controllers\ProductsTypeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VendorsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/admin/login', [AuthController::class, 'login'])->name('login');
Route::post('/admin/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Change Password
    Route::get('/change-password', [AuthController::class, 'changePasswordView'])->name('change.password.view');
    Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password')->where('id', '[0-9]+');

    //Users
    Route::resource('users', UsersController::class);
    
    //Roles
    Route::resource('roles', RolesController::class);

    //Modules
    Route::resource('modules', ModulesController::class);

    //Permissions
    Route::resource('permissions', PermissionController::class);
    //updatePermissions
    Route::put('/roles/{role_id}/permissions', [PermissionController::class, 'updatePermissions'])->name('updatePermissions');

    //Corporate
    Route::resource('corporate', CorporateController::class);



 
});
