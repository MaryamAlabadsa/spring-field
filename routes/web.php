<?php

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

//Route::get('/', function () {
////    return view('index');
////        return view('layouts.sections.projects.index');
//        return view('layouts.sections.home.home-index');
//});
Route::get('/', function () {
//    return response()->download( 'C:\xampp\tmp\phpA8C1.tmp','name_of_file.pdf');
    return redirect(route('projects.getData'));
});
Route::get('/home', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.getData');
Route::get('/home/{id}', [\App\Http\Controllers\ProjectController::class, 'indexvv']);
Route::get('/home/filter', [\App\Http\Controllers\ProjectController::class, 'filter'])->name('projects.filter');
//Route::get('/postsOrders/{id}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.details');
Route::get('/download-pdf', [\App\Http\Controllers\ProjectController::class, 'downloadPDF']);
Route::post('/home/sendEmail', [\App\Http\Controllers\ContactFormController::class, 'sendEmail']);
