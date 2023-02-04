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


Route::get('/unavailable', function(){
  return view('unavailable');

});

Route::view('/thank-you', 'thank_you')->name('thank-you');



Route::post('/storeAttendance', [AttendanceController::class, 'storeAttendance'])->name('storeAttendance');

Route::get('/', function () {
  $currentTime = date("g:i:s a");
        if (strtotime('08:00:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('09:00:00')) {
          return view('markAttendance');
      } else if (strtotime('11:00:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('11:30:00')) {
        return view('markAttendance');
      } else if (strtotime('12:30:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('13:00:00')) {
        return view('markAttendance');
      }else if (strtotime('16:00:00') <= strtotime($currentTime) && strtotime($currentTime) <= strtotime('17:00:00')) {
        return view('markAttendance');
      }else{
        return view('unavailable');
}
  })->name("home");

  
  Route::get('/test', function () {
    return view('Test.markAttendance');
  });

Route::get('{any}', function() {
  abort(404);
})->where('any', '.*')->name('ErrorPages.404');



