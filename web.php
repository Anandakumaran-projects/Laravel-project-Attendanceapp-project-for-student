<?php


use App\Http\Controllers\AttendanceController;
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
Route::get('/', function() {
    return view('home');
});


    Route::get('present','ViewController@present')->name('present');
    Route::get('permission','ViewController@permission')->name('permission');
    Route::get('leave','ViewController@leave')->name('leave');
    Route::get('report','ViewController@report')->name('report');
    Route::get('presenttable','ViewController@presenttable')->name('presenttable');
    Route::get('permissiontable','ViewController@permissiontable')->name('permissiontable');
    Route::get('leavetable','ViewController@leavetable')->name('leavetable');
    Route::prefix('attendance')->group(function () {
        Route::get('/', [AttendanceController::class, 'index'])->name('attendance.index');
        Route::post('/check-in', [AttendanceController::class, 'checkIn'])->name('attendance.checkIn');
        Route::post('/check-out', [AttendanceController::class, 'checkOut'])->name('attendance.checkOut');
    });

