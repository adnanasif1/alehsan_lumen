<?php

namespace App\Http\Controllers;

use App\PhoneBook;
use Illuminate\Http\Request;

class PhoneBookController extends Controller
{

    public function list()
    {
        return response()->json(PhoneBook::all());
    }

    public function show($id)
    {
        return response()->json(PhoneBook::find($id));
    }

    public function create(Request $request)
    {
        $pur = PhoneBook::create($request->all());

        return response()->json($pur, 201);
    }

    public function update($id, Request $request)
    {
        $pur = PhoneBook::findOrFail($id);
        $pur->update($request->all());

        return response()->json($pur, 200);
    }

    public function delete($id)
    {
        PhoneBook::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}