<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        //  $products = App\Product::orderBy('name')->get();
        $products = Product::all();

        return view('products.all', compact('products'));
    }

    public function filtered() {
        $productFiltered = Product::filteredProducts();

        return view('products.filtered', compact('productFiltered'));
    }

    public function show($id) {
        $singleProduct = Product::findOrFail($id);

        return view('products.singleProduct', compact('singleProduct'));
    }
}
