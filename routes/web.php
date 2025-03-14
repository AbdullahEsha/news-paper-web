<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;

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


Route::get('/', [BlogController::class, 'viewAllBlogHome', 'as' => 'blogDataView', 'as' => 'blogCategoryView', 'as' => 'blogAllCategory']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'verify'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', [BlogController::class, 'viewAllBlog']);
Route::get('/blog/{slug}', [BlogController::class, 'individualBlog', 'as' => 'individual', 'as' => 'allBlogData']);
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
        Route::get('/admin/blog-category', [CategoryController::class, 'index']);
        Route::post('/admin/blog-category', [CategoryController::class, 'create']);

        Route::get('/admin/blog-upload', [BlogController::class, 'index']);
        Route::post('/admin/blog-upload', [BlogController::class, 'create'])
            ->name('admin.store');

        Route::get('/admin/blog', [BlogController::class, 'show', 'as' => 'admin.viewAllBlog']);

        Route::get('/admin/blog-edit/{slug}', [BlogController::class, 'showBlogEdit', 'as' => 'admin.editBlog', 'as' => 'categoryEdit']);
        Route::post('/admin/blog-edit/{slug}', [BlogController::class, 'update']);

        Route::get('/admin/blog-delete/{slug}', [BlogController::class, 'showBlogDestroy', 'as' => 'admin.deleteBlog']);
        Route::post('/admin/blog-delete/{slug}', [BlogController::class, 'destroy']);
    });
});
