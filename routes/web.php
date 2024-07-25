<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutpageController;
use App\Http\Controllers\Ajax\GalleryAjaxController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogComtroller;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PortfoliopageController;
use App\Http\Controllers\PostPageController;
use App\Http\Controllers\PricepageController;
use App\Http\Controllers\ProductCompareController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewpageController;
use App\Http\Controllers\ReviewSubmitController;
use App\Http\Controllers\SearchPageController;
use App\Http\Controllers\ServicepageController;
use App\Http\Controllers\TearmsController;
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





Route::get('/test', function () {
    return view('test');
});

Route::get('/', [HomepageController::class, 'Homepage'])->name('homepage');
Route::get('/products', [ProductPageController::class, 'products'])->name('productpage');
Route::get('/product/{slug}', [ProductPageController::class, 'singleProduct'])->name('product.single');
Route::get('/product-compare', [ProductCompareController::class, 'productCompare'])->name('product.compare');
Route::get('/posts', [PostPageController::class, 'postPage'])->name('post.page');


Route::get('search/',[SearchPageController::class,'index'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
