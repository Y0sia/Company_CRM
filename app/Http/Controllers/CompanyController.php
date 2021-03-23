<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCompany;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index($alias)
    {
        $company = Company::where('alias', $alias)->first();
        return view('single_company', compact('company'));
    }

    /**
     *
     * @param AddCompany $request
     */

    public function create(AddCompany $request)
    {
        $company = Company::create([
            'title' => $request->title,
            'description' => $request->description,
            'alias' => strtolower(str_replace(' ', '-', $request->title)),
            'inn' => $request->inn,
            'general' => $request->general,
            'location' => $request->location,
            'phone' => $request->phone,
        ]);
        return redirect()->home()->with('success', 'Компания успешно добавлена!');
    }
}
