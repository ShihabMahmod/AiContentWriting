<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PricingPlaneController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlaneDetailsController;
use App\Http\Controllers\UsecaseController;
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

Route::post('/generate-a-content',[ContentController::class,'GenerateContent'])->name('content.data');

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/registration',[RegistrationController::class,'index']);
Route::post('/resgister',[RegistrationController::class,'registration'])->name('registration');

//......User Route

Route::get('/home',[HomeController::class,'index']);
Route::get('/get-usecase/{id}',[ProfileController::class,'getUsecase'])->name('get.usecase');

//......AAdmin Route.............

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/upload-pricing-plane',[PricingPlaneController::class,'index']);
Route::post('/new-pricing-plane',[PricingPlaneController::class,'createPricing'])->name('add-pricing-plane');

Route::get('/profile',[ProfileController::class,'index']);

Route::get('/plane-details/{id}',[PlaneDetailsController::class,'planeDetails']);
Route::get('/delete-plane/{id}',[PlaneDetailsController::class,'DeletePlane']);
Route::get('/edit-plane/{id}',[PlaneDetailsController::class,'EditPlane']);
Route::get('/add-use-case',[UsecaseController::class,'index']);
Route::post('/add-use-case',[UsecaseController::class,'Usecase'])->name('add-use-case');


//.............Paypal ............//////
// Route::get('/paypal',function(){
//     return view('myOrder');
// });

Route::post('/paypal', [PaymentController::class, 'payWithpaypal'])->name('paypal');
Route::get('/status', [PaymentController::class, 'getPaymentStatus'])->name('status');