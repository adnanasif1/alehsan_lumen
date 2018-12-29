<?php

namespace App\Http\Controllers;

use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{

    public function list()
    {
        return response()->json(Purchase::all());
    }

    public function show($id)
    {
        return response()->json(Purchase::find($id));
    }

    public function create(Request $request)
    {
        $pur = Purchase::create($request->all());

        return response()->json($pur, 201);
    }

    public function update($id, Request $request)
    {
        $pur = Purchase::findOrFail($id);
        $pur->update($request->all());

        return response()->json($pur, 200);
    }

    public function delete($id)
    {
        Purchase::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}