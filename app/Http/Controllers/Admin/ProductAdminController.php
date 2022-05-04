<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Company;
use App\Models\Product;
use App\Models\Property;

class ProductAdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $companies = Company::all();
        $properties = Property::all();

        return view('admin.products.create', compact('companies', 'properties'));
    }

    public function store(StoreRequest $request)
    {
        dd($request->all());
        $imagePath = \Storage::put('/image', $request['preview_image']);

        Product::firstOrCreate([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'preview_image' => $imagePath
        ]);

        return redirect('/admin/products');
    }

    public function show(Product $product)
    {
        if (!$product) {
            return back();
        }

        return view('admin.products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $product->update($request->all());
        return view('admin.products.edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('admin.products.index');
    }
}
