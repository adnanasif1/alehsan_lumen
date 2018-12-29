<?php

namespace App\Http\Controllers;

use App\SaleItem;
use Illuminate\Http\Request;

class SaleItemController extends Controller
{

    public function list()
    {
        return response()->json(SaleItem::all());
    }

    public function show($id)
    {
        return response()->json(SaleItem::find($id));
    }

    public function create(Request $request)
    {
        $saleitem = SaleItem::create($request->all());

        return response()->json($saleitem, 201);
    }

    public function update($id, Request $request)
    {
        $saleitem = SaleItem::findOrFail($id);
        $saleitem->update($request->all());

        return response()->json($saleitem, 200);
    }

    public function delete($id)
    {
        SaleItem::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}