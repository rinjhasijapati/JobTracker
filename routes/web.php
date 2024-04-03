<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/confirm/logout', function () {
    if(Auth::check()){
        return "<script>if(confirm('Are you sure you want to exit?')) { window.location.href = '/logout'; } else { window.location.href = '/';}</script>";
    }else{
        return view('login');
    }
})->name('confirm-logout');


Route::get('/logout', function () {
    // if(Auth::check()){
    //     return redirect(route('confirm-logout'));
    // }else{
    //     return view('login');
    // }
    Auth::logout();
    return view('login');
})->name('logout');

Route::post('/register-user', function (Request $req) {

    $req->validate([
        'email' => 'required',
        'name' => 'required',
        'password' => 'required',
    ]);
    $parsedData = [
        'email' => $req->email,
        'password' => bcrypt($req->password),
        'name' => $req->name,
    ];
    User::create($parsedData);
    return redirect(route('login'));
})->name('register-user');


Route::post('/signin', function (Request $req) {
    $req->validate([
        'email' => ['required', 'email'],
        'password' => 'required',
    ]);

    if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
        // password is correct
        return redirect(route('dashboard'));
    } else {
       
        return response(route('login'));

    }

});