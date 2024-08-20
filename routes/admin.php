<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\AttributeValueController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EditorImageController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Setting\AboutmeSettingController;
use App\Http\Controllers\Admin\Setting\ChatSectionController;
use App\Http\Controllers\Admin\Setting\ContactSettingController;
use App\Http\Controllers\Admin\Setting\SiteSettingController;
use App\Http\Controllers\Admin\Setting\SocialmediaSettingController;
use App\Http\Controllers\Admin\Setting\WebsiteSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\TestthreeController;
use App\Http\Controllers\TesttwoController;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role', RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('post', PostController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('role', RoleController::class);
    // Start Work

    Route::resource('mobile',TesttwoController::class);

    Route::get('photo',[TestthreeController::class,'index'])->name('photo');
    Route::get('photo/create',[TestthreeController::class,'create'])->name('photo.create');
    Route::post('photo',[TestthreeController::class,'store'])->name('photo.store');
    Route::get('photos/{photo}',[TestthreeController::class,'show'])->name('photo.show');
    Route::get('photos/{photo}/edit',[TestthreeController::class,'edit'])->name('photo.edit');
    Route::post('photos/{photo}',[TestthreeController::class,'destroy'])->name('photo.destroy');


    Route::post('editor/image/store', [EditorImageController::class, 'store'])->name('editorimagestore');

    Route::resource('category',           CategoryController::class);
    Route::resource('brand',              BrandController::class);
    Route::resource('product',            ProductController::class);
    Route::resource('user',               UserController::class);
    Route::resource('attribute',          AttributeController::class);
    Route::post('attribute-ajax-search', [AttributeController::class, 'ajaxSearch'])->name('attributesearch');
    Route::post('attribute-value-search', [AttributeController::class, 'ajaxAttributeValueSearch'])->name('attributvalueesearch');

    Route::get('attribute-value/{id}',    [AttributeValueController::class, 'create'])->name('attributevalue.create');
    Route::post('attribute-value/{id}',   [AttributevalueController::class, 'store'])->name('attributevalue.store');

    Route::post('attribute-value/{id}/update', [AttributevalueController::class, 'update'])->name('attributevalue.update');
    Route::post('attribute-value/{id}/destroy', [AttributevalueController::class, 'destroy'])->name('attributevalue.destroy');

    Route::get('profile/', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::put('profile/update/{id}', [AdminProfileController::class, 'UpdateAdminProfile'])->name('admin.profile.update');
    Route::get('profile/resetpassword/{id}', [AdminProfileController::class, 'resetpasswordAdminProfile'])->name('admin.profile.resetpassword');
    Route::put('profile/changepassword/{id}', [AdminProfileController::class, 'changepasswordProfile'])->name('admin.profile.changepassword');
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settingpage');
        Route::get('/site-setting', [SiteSettingController::class, 'sitesetting'])->name('sitesetting')->middleware('can:websitesetting');

        Route::get('/website-setting', [WebsiteSettingController::class, 'websitesetting'])->name('website.setting');
        Route::post('/website-setting/store', [WebsiteSettingController::class, 'websitestoresetting'])->name('website.setting.store');
        Route::get('/social-media', [SocialmediaSettingController::class, 'socialmedia'])->name('socialmedia.setting');
        Route::post('/social-media/store', [SocialmediaSettingController::class, 'socialmediastore'])->name('socialmedia.setting.store');
        Route::get('/contact-setting', [ContactSettingController::class, 'contactsetting'])->name('contact.setting');
        Route::post('/contact-setting/store', [ContactSettingController::class, 'contactsettingstore'])->name('contact.setting.store');
    });
});
