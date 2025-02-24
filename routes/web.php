<?php

use App\Http\Controllers\backend\BDashboardController;
use App\Http\Controllers\backend\BFeedbackController;
use App\Http\Controllers\backend\BGuestController;
use App\Http\Controllers\backend\BMajorController;
use App\Http\Controllers\backend\BRoomController;
use App\Http\Controllers\backend\BRoomTypeController;
use App\Http\Controllers\backend\BStaffController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\RestaurantController;
use App\Http\Controllers\frontend\RoomController;
use App\Http\Controllers\frontend\RoomDetailController;
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
//     return view('welcome');
// });


/* frontend block */
Route::controller(HomeController::class)->group(function(){
    Route::get('/','index');
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/about','index');
});

Route::controller(ContactUsController::class)->group(function(){
    Route::get('/contact','index');
});

Route::controller(RestaurantController::class)->group(function(){
    Route::get('/restaurant','index');
});

Route::controller(RoomController::class)->group(function(){
    Route::get('/rooms','index');
});





/* backend block */
Route::controller(BDashboardController::class)->group(function(){
    Route::get('/dashboard','index');
});

Route::resource('/roomType',BRoomTypeController::class);

Route::resource('/guest',BGuestController::class);

Route::resource('/staff',BStaffController::class);

Route::resource('/room',BRoomController::class);

Route::resource('/feedback',BFeedbackController::class);