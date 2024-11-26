<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home.userpage');
    })->name('dashboard');
});

                     //service route
Route::get('service/ielts',[serviceController::class,'ielts']);
Route::get('service/short',[serviceController::class,'short']);

                        // user routes
route::get('/', function(){
    return view('home.userpage');
});

                        // admin routes
route::get('/home' , [HomeController::class , 'index']);  // for Authentication 
// route::view('/CertificateGenrator' ,'admin.CertificateGenrator')->can('isAdmin'); // for Certification Genration in Admin pannel
route::get('/CertificateGenrator', [StudentController::class ,'CertificateGenrator']); // for Certification Genration in Admin pannel
Route::post('/SubmitCertificationForm', [StudentController::class, 'SubmitCertificationForm'])->name('SubmitCertificationForm'); // for submit  in database student cerification form data
route::get('CertifiedStudents',[StudentController::class ,'CertifiedStudents']);
route::get('/AllRegisterUsers' , [UserController::class , 'AllRegisterUsers'])->name('AllRegisterUsers');
route::get('/home', [StudentController::class , 'CountStudent']); // route home necessary when you type route CountStudent its shift to another route.

                     // result routes
 Route::get('/result', [StudentController::class, 'index'])->name('result.index');
 Route::post('/result', [StudentController::class, 'show'])->name('result.show');
                        