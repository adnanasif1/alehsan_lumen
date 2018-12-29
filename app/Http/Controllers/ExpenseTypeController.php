<?php

namespace App\Http\Controllers;

use App\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{

    public function list()
    {
        return response()->json(ExpenseType::all());
    }

    public function show($id)
    {
        return response()->json(ExpenseType::find($id));
    }

    public function create(Request $request)
    {
        $et = ExpenseType::create($request->all());

        return response()->json($et, 201);
    }

    public function update($id, Request $request)
    {
        $et = ExpenseType::findOrFail($id);
        $et->update($request->all());

        return response()->json($et, 200);
    }

    public function delete($id)
    {
        ExpenseType::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}