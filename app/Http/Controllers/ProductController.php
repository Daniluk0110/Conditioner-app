<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        return view('website.products', compact('products'));
    }

    public function show(Product $product)
    {
        $properties = $product->properties;
        return view('website.product_detail', compact('product', 'properties'));
    }
}
