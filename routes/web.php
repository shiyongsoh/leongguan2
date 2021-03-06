<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\kioskCodeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SocialAuthGoogleController;
use Illuminate\Support\Facades\Mail;

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
Route::get('/food/packs', function () {
    return view('packs');
});
Route::get('/kioskwelcome', function () {
    return view('kioskwelcome');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //     return Inertia\Inertia::render('Dashboard');
    // })->name('dashboard');
    
Route::get('/addProduct', [AdminController::class,'addProductPage']);
Route::post('/addProduct', [AdminController::class,'addProduct']);
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/kiosk/{id}', [kioskCodeController::class, 'checkForKioskCode']);
// Route::get('/redeem', [HomeController::class, 'redeem']);
Route::get('/food/{id}', [HomeController::class, 'kiosk']);
Route::get('/admin', [AdminController::class, 'listFood']);
Route::post('/buy', [purchaseController::class, 'purchase']);
Route::get('/finalise', [purchaseController::class, 'finalisePayment']);
Route::get('/pay', [purchaseController::class, 'pay']);
Route::get('/showProfile',[HomeController::class, 'showProfile']);
Route::get('/setProfile/{name}',[HomeController::class, 'setProfile']);

Route::post('/admin', [AdminController::class, 'insertFood']);

//kioskCode
Route::get('/givekioskcode',[kioskCodeController::class,'giveKioskCode']);


//survey
Route::post('/survey',[HomeController::class,'getSurvey']);

//google
Route::get('/redirect', [SocialAuthGoogleController::class,'redirect']);
Route::get('/callback', [SocialAuthGoogleController::class,'callback']);

//kiosk welcome
Route::get('/kioskwelcome', [HomeController::class,'kioskWelcome']);


//send redeem mail
Route::get('/redeem',[MailController::class,'getEmail']);
Route::post('/send/email', [MailController::class, 'sendRedeemMail']);
Route::post('/receiveCode/{id}',[MailController::class,'receiveCode']);
//test
Route::get('/redisTest',[HomeController::class,'redis_test']);

// Route::get('/fire', function () {
//     event(new \App\Events\TestEvent());
//     return 'ok';
// });

Route::get('/fire', function () {
    event(new \App\Events\purchaseMade());
    return 'hmm';
});