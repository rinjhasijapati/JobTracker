<?php

use App\Http\Controllers\Auth\OauthProviderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Expr\FuncCall;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/auth/{provider}/redirect', [OauthProviderController::class,'redirect']);
 
Route::get('/auth/{provider}/callback', [OauthProviderController::class,'callback']);


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard',function(){
        return view('dashboard');

    })->name('dashboard');


    Route::get('status/{type}', function ($type) {
        return view('showstatus', ['status' => $type]);
    })->name('status');
    
    // Route::get('/applicationsent', function () {
    //     return view('applicationSent');
    // })->name('applicationsent');


    
    // Route::get('/interviewset', function () {
    //     return view('leads');
    // })->name('leads');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
