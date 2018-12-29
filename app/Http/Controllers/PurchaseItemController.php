<?php

namespace App\Http\Controllers;

use App\PurchaseItem;
use Illuminate\Http\Request;

class PurchaseItemController extends Controller
{

    public function list()
    {
        return response()->json(PurchaseItem::all());
    }

    public function show($id)
    {
        return response()->json(PurchaseItem::find($id));
    }

    public function create(Request $request)
    {
        $pi = PurchaseItem::create($request->all());

        return response()->json($pi, 201);
    }

    public function update($id, Request $request)
    {
        $pi = PurchaseItem::findOrFail($id);
        $pi->update($request->all());

        return response()->json($pi, 200);
    }

    public function delete($id)
    {
        PurchaseItem::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}