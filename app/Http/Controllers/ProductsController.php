<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Main store page, index of all products
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store.index', ['products' => Product::latest()->get()]);
    }

    /**
     * Show the form for creating a new product.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Admin only
    }

    /**
     * Store a newly created product in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Admin Only
    }

    /**
     * Display the specified product.
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Maybe a model? Will have to see how it works with snipcart's cart
    }

    /**
     * Show the form for editing the specified product.
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // Admin Only 
    }

    /**
     * Update the specified product in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Admin Only
    }

    /**
     * Remove the specified product from storage.
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Admin only, should automatically update
    }
}
