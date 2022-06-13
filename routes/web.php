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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::get('/ticket', function () {
    return view('ticket');
})->middleware(['auth'])->name('ticket');

Route::post('/ticketcontrol', 'App\Http\Controllers\TicketsController@store')->middleware(['auth']);
Route::get('/usercontrol', 'App\Http\Controllers\UserController@store')->middleware(['auth']);
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('dashboard');
Route::get('/technician', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('technician');
Route::get('/technician', 'App\Http\Controllers\DashboardController@index')->middleware(['auth'])->name('technician');


require __DIR__.'/auth.php';
