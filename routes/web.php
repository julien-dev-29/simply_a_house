<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\OptionController;
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

$idRegex = '[0-9]*';
$slugRegex = '[0-9a-z\-]*';

/** */
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/les-maisons', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/les-maisons/{slug}-{property}', [PropertyController::class, 'show'])->name('properties.show')->where([
    'property' => $idRegex,
    'slug' => $slugRegex
]);

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::delete('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

/** */
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () use ($idRegex) {
    Route::resource('property', App\Http\Controllers\Admin\PropertyController::class)->except('show');
    Route::resource('option', OptionController::class)->except('show');
    Route::delete('picture/{picture}', [App\Http\Controllers\Admin\PictureController::class, 'destroy'])
        ->name('picture.destroy')
        ->where([
            'picture' => $idRegex
        ]);
});