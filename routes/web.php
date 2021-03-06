<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route matchs
Route::resource('matchs', 'MatchController');

//Route authentification
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

//Route Utilisateurs
Route::resource('/users', 'UserController');

/* Cart Routes */
Route::post('panier/ajouter', 'CartController@store')->name('cart.store');

/* Route boutique */
Route::get('boutique', 'BoutiqueController@index')->name('boutique.index');


