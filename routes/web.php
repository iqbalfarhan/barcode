<?php

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

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('guest')->group(function (){
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth')->group(function (){
    Route::get('/home', \App\Livewire\Pages\Home::class)->name('home');
    Route::get('/profile', \App\Livewire\Pages\Profile::class)->name('profile');

    Route::get('/unit', \App\Livewire\Pages\Unit\Index::class)->name('unit.index');
    Route::get('/unit/scan', \App\Livewire\Pages\Unit\Scan::class)->name('unit.scan');
    Route::get('/unit/{unit}', \App\Livewire\Pages\Unit\Show::class)->name('unit.show');
});
