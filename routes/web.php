<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/food/meesoto', function () {
    return view('meesoto');
});
Route::get('/food/meegoreng', function () {
    return view('meegoreng');
});
Route::get('/food/currychicken', function () {
    return view('currychicken');
});
Route::get('/food/hokkienmee', function () {
    return view('hokkienMee');
});
Route::get('/food/hokkienmeefriednoodle', function () {
    return view('hokkienFriedNoodle');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/kiosk/{id}', [HomeController::class, 'kiosk']);
Route::get('/food/{id}', [HomeController::class, 'kiosk']);
Route::get('admin', [AdminController::class, 'listFood']);


Route::post('/admin', [AdminController::class, 'insertFood']);
