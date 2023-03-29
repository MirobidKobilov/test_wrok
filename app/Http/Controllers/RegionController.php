<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegionController extends Controller
{
    public function index()
    {
        return Region::all();
    }

    public function show($id)
    {
        return Region::find($id);
    }

    public function store(Request $request)
    {
        $region = Region::create($request->only('name'));
        
        return response($region, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $region = Region::find($id);

        $region->update($request->only('name'));

        return response($region, Response::HTTP_ACCEPTED);
    }

    public function destroy($id)
    {

        Region::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
