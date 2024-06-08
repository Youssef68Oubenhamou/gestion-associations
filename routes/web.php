<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard.layout');
// });

Route::resource("admin" , "\App\Http\Controllers\AdminController") ;

Route::resource("/admin-association" , "\App\Http\Controllers\AssociationController") ;

Route::resource("/admin-volunteer" , "\App\Http\Controllers\VolunteerController") ;

Route::resource('offers','App\Http\Controllers\OfferController') ;
