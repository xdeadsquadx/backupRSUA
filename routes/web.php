<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/education', function () {
    return view('education');
})->name('education');


Route::get('/modul', function () {
    return view('module.modul');
})->name('modul');


Route::get('/services', function () {
    return view('services');
})->name('services');



Route::group(['prefix' => 'user'], function() {
    Route::get('/login', function () {
        return view('user.auth.login');
    })->name('user.login');

            Route::get('/dashboard', function () {
                return view('user.dashboard');
            })->name('user.dashboard');
            Route::group(['prefix' => 'BPJS'], function() {
                Route::get('/', function () {
                    return view('module.modul');
                })->name('user.module');
                Route::get('/ppt', function () {
                    return view('module.ppt');
                })->name('ppt');
                Route::get('/video', function () {
                    return view('module.video');
                })->name('video');
                Route::get('/quiz', function () {
                    return view('module.quiz');
                })->name('quiz');
            });
            
            
           
        
     

    

});