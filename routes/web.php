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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('/','index');
Route::post('/', [\App\Http\Controllers\Controller::class, 'logout'])->name('logout');

Route::get('/blogs', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{blog}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::post('/blogsaction', [\App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::view('/blog-details', 'blog-details');

Route::view('/more-aboutus','more-aboutus');
Route::view('/more-terms','more-terms');
Route::view('/more-testimonials','more-testimonials');;

Route::get('/packages', [\App\Http\Controllers\EnquiryController::class, 'index'])->name('packages.index');
Route::get('/packages/create', [\App\Http\Controllers\EnquiryController::class, 'create'])->name('packages.create');
Route::post('/packagesaction', [\App\Http\Controllers\EnquiryController::class, 'store'])->name('packages.store');

Route::get('/contacts', [\App\Http\Controllers\MessageController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [\App\Http\Controllers\MessageController::class, 'create'])->name('contacts.create');
Route::post('/contactaction', [\App\Http\Controllers\MessageController::class, 'store'])->name('contacts.store');

Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product}', [\App\Http\Controllers\ShopController::class, 'show'])->name('shop.show');


Route::view('/checkout', 'checkout');
Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout.store');

Route::post("/upload", [\App\Http\Controllers\UploadController::class, 'store']);

require __DIR__.'/auth.php';
