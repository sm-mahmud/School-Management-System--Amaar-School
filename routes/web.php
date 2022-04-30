<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Student\StudentRegController;




Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/admin/logout',[AdminController::class, 'Logout'])->name('admin.logout');

//user management for all Routes

Route::prefix('users')->group(function(){
Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
Route::get('/add',[UserController::class, 'UserAdd'])->name('user.add');
Route::post('/store',[UserController::class, 'UserStore'])->name('user.store');
Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('user.edit');
Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('user.update');
Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('user.delete');

});

Route::prefix('setups')->group(function(){
    Route::get('student/class/view',[StudentClassController::class, 'ViewStudent'])->name('student.class.view');
    Route::get('student/class/add',[StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');
    Route::post('student/class/store',[StudentClassController::class, 'StudentClassStore'])->name('student.class.store');
    Route::get('student/class/edit/{id}',[StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');
    Route::post('student/class/update/{id}',[StudentClassController::class, 'StudentClassUpdate'])->name('student.class.update');
    Route::get('student/class/delete/{id}',[StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');
    

    Route::get('student/year/view',[StudentYearController::class, 'ViewYear'])->name('student.year.view');
    Route::get('student/year/add',[StudentYearController::class, 'AddYear'])->name('student.year.add');
    Route::post('student/year/store',[StudentYearController::class, 'StoreYear'])->name('student.year.store');
    Route::get('student/year/edit/{id}',[StudentYearController::class, 'EditYear'])->name('student.year.edit');
    Route::post('student/year/update/{id}',[StudentYearController::class, 'UpdateYear'])->name('student.year.update');
    Route::get('student/year/delete/{id}',[StudentYearController::class, 'DeleteYear'])->name('student.year.delete');


    Route::get('student/group/view',[StudentGroupController::class, 'ViewGroup'])->name('student.group.view');
    Route::get('student/group/add',[StudentGroupController::class, 'AddGroup'])->name('student.group.add');
    Route::post('student/group/store',[StudentGroupController::class, 'StoreGroup'])->name('student.group.store');
    Route::get('student/group/edit/{id}',[StudentGroupController::class, 'EditGroup'])->name('student.group.edit');
    Route::post('student/group/update/{id}',[StudentGroupController::class, 'UpdateGroup'])->name('student.group.update');
    Route::get('student/group/delete/{id}',[StudentGroupController::class, 'DeleteGroup'])->name('student.group.delete');
});

Route::prefix('students')->group(function(){
    Route::get('/reg/view',[StudentRegController::class, 'StudentRegView'])->name('student.reg.view');
    Route::get('/reg/add',[StudentRegController::class, 'StudentRegAdd'])->name('student.reg.add');
    Route::post('/reg/store',[StudentRegController::class, 'StudentRegStore'])->name('student.reg.store');

  
});
