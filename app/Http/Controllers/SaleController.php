<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function list()
    {
        return response()->json(Sale::all());
    }

    public function show($id)
    {
        return response()->json(Sale::find($id));
    }

    public function create(Request $request)
    {
        $sale = Sale::create($request->all());

        return response()->json($sale, 201);
    }

    public function update($id, Request $request)
    {
        $sale = Sale::findOrFail($id);
        $sale->update($request->all());

        return response()->json($sale, 200);
    }

    public function delete($id)
    {
        Sale::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}