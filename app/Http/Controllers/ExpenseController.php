<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    public function list()
    {
        return response()->json(Expense::all());
    }

    public function show($id)
    {
        return response()->json(Expense::find($id));
    }

    public function create(Request $request)
    {
        $exp = Expense::create($request->all());

        return response()->json($exp, 201);
    }

    public function update($id, Request $request)
    {
        $exp = Expense::findOrFail($id);
        $exp->update($request->all());

        return response()->json($exp, 200);
    }

    public function delete($id)
    {
        Expense::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}