<?php

use App\Http\Controllers\AttendanceController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Attendance;
use Illuminate\Support\Facades\Date;


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


Route::view('/existing', 'existing');

Route::get('/unavailable', function(){
  return view('unavailable');

});

Route::view('/thank-you', 'thank_you');

Route::post('/storeAttendance', [AttendanceController::class], 'storeAttendance')->name('storeAttendance');

Route::get('/', function () {
  $currentTime = date("Hi");
  if ($currentTime >= 800 && $currentTime <= 900) {
  return view('markAttendance');
  } else if ($currentTime >= 1100 && $currentTime <= 1200) {
  return view('markAttendance');
  } else if ($currentTime >= 1230 && $currentTime <= 1300) {
  return view('markAttendance');
  } else if ($currentTime >= 1600 && $currentTime <= 1630) {
  return view('markAttendance');
  } else {
  return redirect('unavailable');
  }
  })->name("home");

Route::get('{any}', function() {
  abort(404);
})->where('any', '.*')->name('404');



