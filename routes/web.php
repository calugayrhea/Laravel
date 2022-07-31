<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\act5;
use App\Http\Controllers\ActController5;
use App\Http\Controllers\tryblog;
use App\Http\Controllers\Registration;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\secondblogko;
use App\Http\Controllers\Projectcontroller;


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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/startproject',[Projectcontroller::class,'mainboard'])->name('pro.start');
Route::get('/superlogin',[Projectcontroller::class,'superlogin'])->name('pro.superlogin');
Route::post('/supercheck',[Projectcontroller::class,'supercheck'])->name('pro.supercheck');
Route::get('/superdashboard',[Projectcontroller::class,'superdashboard'])->name('pro.superdashboard');

Route::get('/adminregister',[Projectcontroller::class,'adminregister'])->name('pro.adminregister');
Route::post('/adminsave',[Projectcontroller::class,'adminsave'])->name('pro.adminsave');
Route::get('adminedit/{id}',[Projectcontroller::class,'adminedit']);
Route::post('adminupdate/',[Projectcontroller::class,'adminupdate']);
Route::get('admindelete/{id}',[Projectcontroller::class,'admindelete']);

Route::get('/customerregister',[Projectcontroller::class,'customerregister'])->name('pro.customerregister');
Route::get('/admincustomerregister',[Projectcontroller::class,'admincustomerregister'])->name('pro.admincustomerregister');

Route::post('/customersave',[Projectcontroller::class,'customersave'])->name('pro.customersave');
Route::post('/admincustomersave',[Projectcontroller::class,'admincustomersave'])->name('pro.admincustomersave');

Route::get('customeredit/{id}',[Projectcontroller::class,'customeredit']);
Route::get('admincustomeredit/{id}',[Projectcontroller::class,'admincustomeredit']);

Route::post('customerupdate/',[Projectcontroller::class,'customerupdate']);
Route::post('admincustomerupdate/',[Projectcontroller::class,'admincustomerupdate']);

Route::get('customerdelete/{id}',[Projectcontroller::class,'customerdelete']);
Route::get('admincustomerdelete/{id}',[Projectcontroller::class,'admincustomerdelete']);

Route::get('/adminlogin',[Projectcontroller::class,'adminlogin'])->name('pro.adminlogin');
Route::post('/admincheck',[Projectcontroller::class,'admincheck'])->name('pro.admincheck');
Route::get('/admindashboard',[Projectcontroller::class,'admindashboard'])->name('pro.admindashboard');

Route::get('/superlogout',[Projectcontroller::class,'superlogout'])->name('pro.superlogout');

Route::get('/adminlogout',[Projectcontroller::class,'adminlogout'])->name('pro.adminlogout');




