<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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
Route::get('/Aboutus', function () {
    return view('Aboutus');
});
Route::get('/', [
    HomeController::class, 'index'
])->name('home');
Route::get('/home', [
    HomeController::class, 'index'
])->name('home');
Route::get('/posts/{id}', [
    HomeController::class, 'show'
])->name('post-show');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home', function () {
    return view('home');
});
require __DIR__.'/auth.php';
Route::get('/admin', [
    AdminController::class, 'index'
])->middleware('auth')->name('admin');
Route::get('/admin/users', [
    AdminUsersController::class, 'index'
])->middleware('auth')->name('admin-users');
Route::get('/admin/users/create', [
    AdminUsersController::class, 'create'
])->middleware('admin')->name('admin-users-create');
Route::post('/admin/users/create', [
    AdminUsersController::class, 'store'
])->middleware('admin')->name('admin-users-create');

Route::get('/admin/users/{id}/edit', [
    AdminUsersController::class, 'edit'
])->middleware('admin')->name('admin-users-edit');

Route::patch('/admin/users/{id}/edit', [
    AdminUsersController::class, 'update'
])->middleware('admin')->name('admin-users-edit');


Route::get('/admin/categories', [
    CategoryController::class, 'index'
])->middleware('auth')->name('admin-categories');

Route::get('/admin/categories/create', [
    CategoryController::class, 'create'
])->middleware('auth')->name('admin-categories-create');

Route::post('/admin/categories/create', [
    CategoryController::class, 'store'
])->middleware('auth')->name('admin-categories-create');

Route::get('/admin/categories/{id}/edit', [
    CategoryController::class, 'edit'
])->middleware('auth')->name('admin-categories-edit');

Route::patch('/admin/categories/{id}/edit', [
    CategoryController::class, 'update'
])->middleware('auth')->name('admin-categories-edit');
// posts


Route::get('/admin/posts', [
    PostController::class, 'index'
])->middleware('auth')->name('admin-posts');

Route::get('/admin/posts/create', [
    PostController::class, 'create'
])->middleware('auth')->name('admin-posts-create');

Route::post('/admin/posts/create', [
    PostController::class, 'store'
])->middleware('auth')->name('admin-posts-create');

Route::get('/admin/posts/{id}/edit', [
    PostController::class, 'edit'
])->middleware('auth')->name('admin-posts-edit');

Route::patch('/admin/posts/{id}/edit', [
    PostController::class, 'update'
])->middleware('auth')->name('admin-posts-edit');
