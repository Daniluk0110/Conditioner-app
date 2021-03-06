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
        \Storage::put('public/images/', $request['preview_image']);
        $imagePath = \Storage::put('images/', $request['preview_image']);
        $properties = $request->get('property_ids');
        $smallDescription = '';

        Product::firstOrCreate([
            'name' => $request->get('name'),
            'stock' => $request->get('stock'),
            'description' => $request->get('description'),
            'usd_price' => $request->get('price'),
            'preview_image' => $imagePath,
            'company_id' => $request->get('company_id')
        ])
            ->properties()
            ->attach($properties);

        return redirect('/admin/products');
    }

    public function show(Product $product)
    {
        if (!$product) {
            return back();
        }
        $product->company = Company::where('id', $product->company_id)->first()->name;
        $properties = \DB::table('products')
            ->select([
                'properties.name',
                'product_property.value',
            ])
            ->leftJoin('product_property', 'product_property.product_id', 'products.id')
            ->leftJoin('properties', 'properties.id', 'product_property.property_id')
            ->where('products.id', $product->id)
            ->get();

        return view('admin.products.show', compact('product', 'properties'));
    }

    public function edit(Product $product)
    {
        $companies = Company::all();
        $properties = \DB::table('products')
            ->select([
                'properties.id',
                'properties.name',
                'product_property.value',
                'product_property.float_value',
            ])
            ->leftJoin('product_property', 'product_property.product_id', 'products.id')
            ->leftJoin('properties', 'properties.id', 'product_property.property_id')
            ->where('products.id', $product->id)
            ->get();

        return view('admin.products.edit', compact('product', 'companies', 'properties'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        $properties = $request->get('property_ids');

        $product->update([
            'name' => $request->get('name'),
            'stock' => $request->get('stock'),
            'description' => $request->get('description'),
            'usd_price' => $request->get('price'),
            'company_id' => $request->get('company_id')
        ]);

        $product->properties()->detach();
        $product->properties()->attach($properties);

        return redirect()->back();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
