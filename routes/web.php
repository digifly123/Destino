<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('landing');
Route::get('/travel_page',[HomeController::class,'travel_page'])->name('travel_page');
Route::get('/all_travel',[HomeController::class,'all_travel'])->name('all_travel');
Route::get('/search',[HomeController::class,'search'])->name('search');
Route::get('/dashboard ',[HomeController::class,'dashboard'])->name('dashboard');
Route::get('/visa_service ',[HomeController::class,'visa_service'])->name('visa_service');
Route::get('/order_info ',[HomeController::class,'order_info'])->name('order_info');
Route::get('/upload_docs ',[HomeController::class,'upload_docs'])->name('upload_docs');
Route::get('/visa_orderd ',[HomeController::class,'visa_orderd'])->name('visa_orderd');
Route::get('/invite_friend ',[HomeController::class,'invite_friend'])->name('invite_friend');
Route::get('/last_trip ',[HomeController::class,'last_trip'])->name('last_trip');
Route::get('/messages ',[HomeController::class,'messages'])->name('messages');
Route::get('/my_account ',[HomeController::class,'my_account'])->name('my_account');
Route::get('/my_fav ',[HomeController::class,'my_fav'])->name('my_fav');
Route::get('/my_transaction ',[HomeController::class,'my_transaction'])->name('my_transaction');
Route::get('/my_trip ',[HomeController::class,'my_trip'])->name('my_trip');
Route::get('/pink_trip',[HomeController::class,'pink_trip'])->name('pink_trip');
Route::get('/trip_info',[HomeController::class,'trip_info'])->name('trip_info');

















Route::prefix('client')->name('client.')->group(function(){
    Route::get('/login',[HomeController::class,'login'])->name('login');
    Route::get('/register',[HomeController::class,'register'])->name('register');

});