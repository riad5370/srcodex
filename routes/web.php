<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CustomerMailController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('aboutus',[FrontendController::class,'aboutus'])->name('aboutus');
Route::get('category-product/{categoryId}',[FrontendController::class,'categoryProduct'])->name('category.product');
Route::get('all-product',[FrontendController::class,'allProduct'])->name('all.product');
Route::get('product-details/{slug}',[FrontendController::class,'details'])->name('details');
//customar mail
Route::Post('/cutomer/mail',[CustomerMailController::class,'mailSent'])->name('mail.sent');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('products',ProductController::class);
    Route::resource('categories',CategoryController::class);

    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
