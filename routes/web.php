<?php

use App\Product;
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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/products', function (){
//    $products = App\Product::orderBy('name')->get();
    $products = Product::all();

    return view('products.all', compact('products'));
});

Route::get('/products/filtered/', function (){
    $productFiltered = Product::searchText();

    return view('products.filtered', compact('productFiltered'));
});

Route::get('/products/{id}', function ($id) {
    $singleProduct = Product::where('id', '=', $id)->first();

    return view('products.singleProduct', compact('singleProduct'));
});


