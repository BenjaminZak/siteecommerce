<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/', "App\\Http\\Controllers\\Shop\\MainController@index")->name('homepage');

Route::get('/produit/{id}',"App\\Http\\Controllers\\Shop\\MainController@produit")->name('voir_produit');

Route::get('/categorie/{id}', "App\\Http\\Controllers\\Shop\\MainController@viewByCategory")->name('voir_produits_par_cat');

Route::get('/tag/{id}', "App\\Http\\Controllers\\Shop\\MainController@viewByTag")->name('voir_produits_par_tag');

Route::post('/panier/add/{id}', "App\\Http\\Controllers\\Shop\\CartController@add")->name(('cart_add'));

Route::get('/panier', "App\\Http\\Controllers\\Shop\\CartController@index")->name(('cart_index'));

Route::post('/panier/del/{id}', "App\\Http\\Controllers\\Shop\\CartController@del")->name(('cart_del'));