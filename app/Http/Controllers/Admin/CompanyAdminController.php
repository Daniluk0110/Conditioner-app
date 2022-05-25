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

    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    public function update(CompanyRequest $request, Company $company)
    {
        $company->update($request->all());
        return redirect()->back();
    }

    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('admin.companies.index');
    }
}
