<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/new-review', [ReviewController::class, 'new'])->name('review.new');
Route::get('/admin', [HomeController::class, 'admin']);

Route::group(['prefix' => 'admin', 'as' => 'admin.',  'middleware' => 'auth'], function ()
{
    Route::get('dashboard', [Admin\HomeController::class, 'index'])->name('home');
    Route::get('reviews/approved', [Admin\ReviewController::class, 'index'])->name('reviews.approved');
    Route::get('reviews/pending', [Admin\ReviewController::class, 'pending'])->name('reviews.pending');
    Route::get('review/{id}', [Admin\ReviewController::class, 'get'])->name('review');
    Route::post('review/{id}/approve', [Admin\ReviewController::class, 'approve'])->name('review.approve');
    Route::get('review/{id}/trash', [Admin\ReviewController::class, 'trash'])->name('review.trash');

    Route::get('settings', [Admin\SettingsController::class, 'index'])->name('profile');
    Route::put('settings/profile/edit', [Admin\SettingsController::class, 'update'])->name('profile.edit');
    Route::put('settings/profile/password', [Admin\SettingsController::class, 'password'])->name('profile.password');
});