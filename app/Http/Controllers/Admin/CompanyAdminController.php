<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanyRequest;
use App\Models\Company;

class CompanyAdminController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        return view('admin.companies.create');
    }

    public function store(CompanyRequest $request)
    {
        Company::firstOrCreate([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect('/admin/companies');
    }

    public function show(Company $company)
    {
        if (!$company) {
            return back();
        }

        return view('admin.companies.show', compact('company'));
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
