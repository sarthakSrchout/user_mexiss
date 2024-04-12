<?php

use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\UserController;

use Illuminate\Support\Facades\Route;





Route::match(['post', 'get'], '/', [UserController::class, 'homepage'])->name('user-homepage');
Route::match(['post', 'get'], '/product', [UserController::class, 'product'])->name('user-product');
Route::match(['post', 'get'], '/aboutus', [UserController::class, 'aboutus'])->name('user-aboutus');
Route::match(['post', 'get'], '/contactus', [UserController::class, 'contactus'])->name('user-contactus');
Route::match(['post', 'get'], '/product/details', [UserController::class, 'productdetails'])->name('user-productdetails');
Route::match(['post', 'get'], '/cart', [UserController::class, 'cart'])->name('user-cart');
Route::match(['post', 'get'], '/terms-and-condition', [UserController::class, 'term'])->name('user-term');
Route::match(['post', 'get'], '/help-and-support', [UserController::class, 'help'])->name('user-help');
Route::match(['post', 'get'], '/frequently-asked-questions', [UserController::class, 'faq'])->name('user-faq');
Route::match(['post', 'get'], '/add/address', [UserController::class, 'address'])->name('user-address');
Route::match(['post', 'get'], '/my/address', [UserController::class, 'myaddress'])->name('user-myaddress');
Route::match(['post', 'get'], '/add/payment', [UserController::class, 'payment'])->name('user-payment');
Route::match(['post', 'get'], '/user/profile', [UserController::class, 'profile'])->name('user-profile');
Route::match(['post', 'get'], '/user/myorrders', [UserController::class, 'myorrders'])->name('user-myorrders');
Route::match(['post', 'get'], '/shopbycategories', [UserController::class, 'shopbycategories'])->name('user-shopbycategories');


Route::prefix('auth')->group(function () {
    
    Route::match(['post', 'get'], '/register', [AuthController::class, 'register'])->name('user-register');
   
});