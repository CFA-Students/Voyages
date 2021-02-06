<?php

use App\Voyage;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Route::get('/',"Shop\MainController@index");

Route::get('/voyage/{id}','Shop\MainController@voyage')->name('voir_voyage');

Route::get('/categorie/{id}','Shop\MainController@viewByCategory')->name('voir_produits_par_cat');

Route::get('/panier/add','Shop\CartController@add')->name('cart_add');

//Route::any('/search',function(){
//    $q = $request->input( 'q' );
//    $voyages = Voyage::whereRaw('voyages.prix_ht = '. $q)->get();
//    if(count($voyages) > 0)
//        return view('home.content', compact('voyages'));
//    else return Route::get('/',"Shop\MainController@index");
//});
