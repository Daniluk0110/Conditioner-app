<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyAdminController extends Controller
{
    public function index()
    {
        $properties = Property::all();

        return view('admin.properties.index', compact('properties'));
    }

    public function create()
    {
        return view('admin.properties.create');
    }

    public function store(PropertyRequest $request)
    {
        Property::firstOrCreate([
            'name' => $request->get('name'),
            'description' => $request->get('description') ?: null,
        ]);

        return redirect('/admin/properties');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
