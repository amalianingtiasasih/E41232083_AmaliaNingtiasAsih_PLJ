<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', [DataController::class, 'index'])->name('index');
Route::get('home', [HomeController::class, 'index'])->name('index');
Route::get('backend.dashboard', [DashboardController::class, 'index'])->name('index');

Route::group(['namespace' => 'Backend'], function ()
{
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
    Route::resource('pengalaman_kerja', 'PengalamanKerjaController');
});
Route::group(['namespace' => 'Backend'], function()
{
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pendidikan', 'PendidikanController');
});
// Route::get('admin/profile', function (){
//     //
// })->middleware('auth');

// Route::get('/', function (){
//     //
// })->middleware('first', 'second');


// use App\Http\Middleware\CheckAge;

// Route::get('admin/profile', function () {
//     //
// })->middleware(CheckAge::class);

// Route::get('/', function () {
//     //
// })->middleware('web');

// Route::group(['middleware' => ['web']], function () {
//     //
// });

// Route::middleware(['web', 'subscibed'])->group(function () {
//     //
// });

// Route::group(['namespace' => 'frontend'], function()
//     {
//         Route::resource('home', 'HomeController');
//     });
