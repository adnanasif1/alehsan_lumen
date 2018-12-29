<?php

namespace App\Http\Controllers;

use App\Salaries;
use Illuminate\Http\Request;

class SalariesController extends Controller
{

    public function list()
    {
        return response()->json(Salaries::all());
    }

    public function show($id)
    {
        return response()->json(Salaries::find($id));
    }

    public function create(Request $request)
    {
        $sal = Salaries::create($request->all());

        return response()->json($sal, 201);
    }

    public function update($id, Request $request)
    {
        $sal = Salaries::findOrFail($id);
        $sal->update($request->all());

        return response()->json($sal, 200);
    }

    public function delete($id)
    {
        Salaries::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}