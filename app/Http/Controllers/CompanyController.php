<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCompany;
use App\Models\Company;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index($alias)
    {
        $company = Company::where('alias', $alias)->first();
        $notes = Company::find(1)->notes()->where('user_id', Auth::id())->get();
        $fields = Db::table('company_field')->get();
        return view('single_company', compact('company', 'notes', 'fields'));
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
