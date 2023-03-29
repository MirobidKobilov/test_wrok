<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StaffController extends Controller
{
    public function index()
    {
        return Staff::all();
    }

    public function show($id)
    {
        return Staff::find($id);
    }

    public function store(Request $request)
    {
        $staff = Staff::create($request->only('name'));
        
        return response($staff, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $staff = Staff::find($id);

        $staff->update($request->only('name'));

        return response($staff, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {

        Staff::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
