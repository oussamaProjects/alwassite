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
Route::get('register', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::resource('projects', ProjectController::class);
Route::resource('cities', CityController::class);
Route::resource('blocs', BlocController::class);
Route::resource('properties', PropertyController::class);
Route::resource('payments', PayController::class);

Route::get('/payments/city/{city}', 'PayController@city')->name('payments.city');
Route::get('/payments/project/{project}', 'PayController@project')->name('payments.project');
Route::get('/payments/bloc/{bloc}', 'PayController@bloc')->name('payments.bloc');

Route::get('/paymentsListe', 'PayController@liste')->name('payments.liste');
Route::get('/payments/year/{year}/property/{property_id}', 'PayController@month');

Route::resource('owners', UsersController::class);
Route::resource('users', UsersController::class);
// Route::get('/user', 'UsersController@index')->name('user.index');

Route::resource('claims', ClaimController::class);
Route::resource('claims_alerts', ClaimAlertController::class);
Route::resource('claims_types', ClaimTypeController::class);
Route::resource('city', 'CityController');
Route::resource('complex', 'ComplexController');
Route::resource('localisation', 'LocalisationController');

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/register', 'CustomAuthController@register')->name('register');
Route::get('/profile', 'ProfileController@edit')->name('profile.update');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::get('/profile/password', 'ProfileController@edit')->name('profile.password');

// Route::get('/table', 'TableController@index')->name('table');

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
