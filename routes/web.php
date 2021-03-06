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
Route::get('/agent', 'App\Http\Controllers\TicketsController@index')->middleware(['auth'])->name('agent');
Route::get('/alltickets', 'App\Http\Controllers\TicketsController@index')->middleware(['auth'])->name('alltickets');
Route::get('/ticketinfo/{id}', 'App\Http\Controllers\TicketsController@info')->middleware(['auth'])->name('ticketinfo');
Route::get('/ticketedit/{id}', 'App\Http\Controllers\TicketsController@edit')->middleware(['auth'])->name('ticketedit');
Route::put('ticketupdate/{id}', 'App\Http\Controllers\TicketsController@update')->middleware(['auth'])->name('ticketupdate');
Route::get('/forgot_password', 'App\Http\Controllers\Security\ForgotPassword@forgot')->middleware(['auth'])->name('forgot_password');
Route::post('/forgot_password', 'App\Http\Controllers\Security\ForgotPassword@password')->middleware(['auth'])->name('forgot_password');


require __DIR__.'/auth.php';
