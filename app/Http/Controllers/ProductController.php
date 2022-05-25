<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductProperty;
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
        $properties = $product->properties->toArray();

        foreach ($properties as $key => $property) {
            $properties[$key]['value'] = ProductProperty::where('product_id', $property['pivot']['product_id'])
                ->where('property_id', $property['pivot']['property_id'])
                ->first()
                ->value;
        }
        return view('website.product_detail', compact('product', 'properties'));
    }
}
