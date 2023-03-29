<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function show($id)
    {
        return Company::find($id);
    }

    public function store(Request $request)
    {
        $company = Company::create($request->only('name'));
        
        return response($company, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        $company->update($request->only('name'));

        return response($company, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {

        Company::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
