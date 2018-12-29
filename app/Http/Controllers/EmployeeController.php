<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function list()
    {
        return response()->json(Employee::all());
    }

    public function show($id)
    {
        return response()->json(Employee::find($id));
    }

    public function create(Request $request)
    {
        $emp = Employee::create($request->all());

        return response()->json($emp, 201);
    }

    public function update($id, Request $request)
    {
        $emp = Employee::findOrFail($id);
        $emp->update($request->all());

        return response()->json($emp, 200);
    }

    public function delete($id)
    {
        Employee::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}