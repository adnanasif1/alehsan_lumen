<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function list()
    {
        return response()->json(Customer::all());
    }

    public function show($id)
    {
        return response()->json(Customer::find($id));
    }

    public function create(Request $request)
    {
        $c = Customer::create($request->all());

        return response()->json($c, 201);
    }

    public function update($id, Request $request)
    {
        $c = Customer::findOrFail($id);
        $c->update($request->all());

        return response()->json($c, 200);
    }

    public function delete($id)
    {
        Customer::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}