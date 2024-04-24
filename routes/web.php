<?php

use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\User\Auth\AuthController;
use App\Http\Controllers\User\UserController;

use Illuminate\Support\Facades\Route;

// require_once app_path('Helpers/authhelper.php');




Route::match(['post', 'get'], '/', [UserController::class, 'homepage'])->name('user-homepage');
Route::match(['post', 'get'], '/product', [UserController::class, 'product'])->name('user-product');
Route::match(['post', 'get'], '/aboutus', [UserController::class, 'aboutus'])->name('user-aboutus');
Route::match(['post', 'get'], '/contactus', [UserController::class, 'contactus'])->name('user-contactus');
Route::match(['post', 'get'], '/product/details', [UserController::class, 'productdetails'])->name('user-productdetails');
Route::match(['post', 'get'], '/product-search', [UserController::class, 'productsearch'])->name('product-search');
Route::match(['post', 'get'], '/cart', [UserController::class, 'cart'])->name('user-cart');
Route::match(['post', 'get'], '/terms-and-condition', [UserController::class, 'term'])->name('user-term');
Route::match(['post', 'get'], '/help-and-support', [UserController::class, 'help'])->name('user-help');
Route::match(['post', 'get'], '/frequently-asked-questions', [UserController::class, 'faq'])->name('user-faq');
Route::match(['post', 'get'], '/shopbycategories', [UserController::class, 'shopbycategories'])->name('user-shopbycategories');
Route::match(['post', 'get'], '/user/sendproductquery', [UserController::class, 'sendproductquery'])->name('user-sendproductquery');


Route::match(['post', 'get'], '/add/address', [UserController::class, 'address'])->name('user-address')->middleware('userauth');
Route::match(['post', 'get'], '/my/address', [UserController::class, 'myaddress'])->name('user-myaddress')->middleware('userauth');
Route::match(['post', 'get'], '/add/payment', [UserController::class, 'payment'])->name('user-payment')->middleware('userauth','paymentpage');
Route::match(['post', 'get'], '/user/profile', [UserController::class, 'profile'])->name('user-profile')->middleware('userauth');
Route::match(['post', 'get'], '/user/myorrders', [UserController::class, 'myorrders'])->name('user-myorrders')->middleware('userauth');
Route::match(['post', 'get'], '/user/addresspostoperation', [UserController::class, 'addresspostoperation'])->name('user-addresspostoperation')->middleware('userauth');
Route::match(['post', 'get'], '/user/getaddressdetails/{address_id}', [UserController::class, 'getaddressdetails'])->name('user-getaddressdetails')->middleware('userauth');



//guest cart


Route::prefix('cart')->group(function () {
    
    Route::match(['post', 'get'], '/addtocart', [CartController::class, 'addtocart'])->name('user-addtocart');
    Route::match(['post', 'get'], '/increasecartquantity', [CartController::class, 'increasecartquantity'])->name('user-increasecartquantity');
    Route::match(['post', 'get'], '/decreasecartquantity', [CartController::class, 'decreasecartquantity'])->name('user-decreasecartquantity');
    Route::match(['post', 'get'], '/cartapplycoupon', [CartController::class, 'cartapplycoupon'])->name('user-cartapplycoupon');
    Route::match(['post', 'get'], '/cartremovecoupon', [CartController::class, 'cartremovecoupon'])->name('user-cartremovecoupon');
    Route::match(['post', 'get'], '/guestcarttocart', [CartController::class, 'guestcarttocart'])->name('user-guestcarttocart');

});
Route::prefix('order')->middleware('userauth','paymentpage')->group(function () {
    
    Route::match(['post', 'get'], '/placeorder', [OrderController::class, 'placeorder'])->name('user-placeorder');
 

});
Route::match(['post', 'get'], '/placed', [OrderController::class, 'placed'])->name('user-placed');

Route::prefix('auth')->group(function () {
    
    Route::match(['post', 'get'], '/sendotp', [AuthController::class, 'sendotp'])->name('user-sendotp');
    Route::match(['post', 'get'], '/register', [AuthController::class, 'register'])->name('user-register');
   
    Route::match(['post', 'get'], '/login', [AuthController::class, 'login'])->name('user-login');
    Route::match(['post', 'get'], '/sendloginotp', [AuthController::class, 'sendloginotp'])->name('user-sendloginotp');


    Route::match(['post', 'get'], '/logout', [AuthController::class, 'logout'])->name('user-logout');
   
});

// in product add specification and tax type for every product like india product for loacl shipment and interantional shipment
//product price in dollar??
//category not required in product
//rating system in product
