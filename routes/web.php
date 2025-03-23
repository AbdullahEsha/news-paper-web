<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TagController;

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


Route::get('/', [NewsController::class, 'viewAllNewsHome', 'as' => 'newsDataView', 'as' => 'newsCategoryView', 'as' => 'newsAllCategory']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'verify'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/news', [NewsController::class, 'viewAllNews']);
Route::get('/news/{slug}', [NewsController::class, 'individualNews', 'as' => 'individual', 'as' => 'allNewsData']);
Route::get('/category/{slug}', [CategoryController::class, 'individualCategory', 'as' => 'categoryone', 'as' => 'categoryall']);
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/privacy-policy', function () {
    return view('privacyPolicy');
});
Route::get('/terms-and-condition', function () {
    return view('termsCondition');
});
Route::get('/error', function () {
    return view('errors.error');
});
Route::get('/disclaimer', function () {
    return view('disclaimer');
});

// ==================== Admin Section ========================= //

Route::group(['middleware' => ['sess']], function () {
    Route::group(['middleware' => ['adminCheck']], function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        });
        Route::get('/admin/category', [CategoryController::class, 'index']);
        Route::post('/admin/category', [CategoryController::class, 'create']);

        Route::get('/admin/location', [LocationController::class, 'index']);
        //Route::post('/admin/location', [CategoryController::class, 'create']);

        Route::get('/admin/tags', [TagController::class, 'index']);
        //Route::post('/admin/category', [CategoryController::class, 'create']);

        Route::get('/admin/upload', [NewsController::class, 'index']);
        Route::post('/admin/upload', [NewsController::class, 'create'])
            ->name('admin.store');

        Route::get('/admin/news', [NewsController::class, 'show', 'as' => 'admin.viewAllNews']);

        Route::get('/admin/edit/{slug}', [NewsController::class, 'showNewsEdit', 'as' => 'admin.editNews', 'as' => 'categoryNews']);
        Route::post('/admin/edit/{slug}', [NewsController::class, 'update']);

        Route::get('/admin/delete/{slug}', [NewsController::class, 'showNewsDestroy', 'as' => 'admin.deleteNews']);
        Route::post('/admin/delete/{slug}', [NewsController::class, 'destroy']);
    });
});
