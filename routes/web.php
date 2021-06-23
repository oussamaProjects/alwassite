<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
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
    return view('welcome');
});



Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');



Route::resource('claim', 'ClaimController');
Route::resource('claim_alert', 'ClaimAlertController');
Route::resource('city', 'CityController');
Route::resource('complex', 'ComplexController');
Route::resource('localisation', 'LocalisationController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'UsersController@edit')->name('register');
Route::get('/profile', 'ProfileController@edit')->name('profile.update');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::get('/profile/password', 'ProfileController@edit')->name('profile.password');

Route::get('/user', 'UserController@index')->name('user.index');
Route::get('/table', 'TableController@index')->name('table');

Route::get('/icons', function () {
    return view('pages.icons');
})->name('icons');

Route::get('/table-list', function () {
    return view('pages.table_list');
})->name('table');

Route::get('/typography', function () {
    return view('pages.typography');
})->name('typography');

Route::get('/map', function () {
    return view('pages.map');
})->name('map');

Route::get('/notifications', function () {
    return view('pages.notifications');
})->name('notifications');

Route::get('/rtl-support', function () {
    return view('pages.language');
})->name('language');

Route::get('/upgrade', function () {
    return view('pages.upgrade');
})->name('upgrade');