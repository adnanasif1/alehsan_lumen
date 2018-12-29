<?php

namespace App\Http\Controllers;

use App\ExpenseItem;
use Illuminate\Http\Request;

class ExpenseItemController extends Controller
{

    public function list()
    {
        return response()->json(ExpenseItem::all());
    }

    public function show($id)
    {
        return response()->json(ExpenseItem::find($id));
    }

    public function create(Request $request)
    {
        $ei = ExpenseItem::create($request->all());

        return response()->json($ei, 201);
    }

    public function update($id, Request $request)
    {
        $ei = ExpenseItem::findOrFail($id);
        $ei->update($request->all());

        return response()->json($ei, 200);
    }

    public function delete($id)
    {
        ExpenseItem::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}