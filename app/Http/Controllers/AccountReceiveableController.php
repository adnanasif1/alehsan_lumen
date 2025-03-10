<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    public function showAllAuthors()
    {
        return response()->json(Author::all());
    }

    public function showOneAuthor($id)
    {
        return response()->json(Author::find($id));
    }

    public function create(Request $request)
    {
        $ar = Author::create($request->all());

        return response()->json($ar, 201);
    }

    public function update($id, Request $request)
    {
        $ar = Author::findOrFail($id);
        $ar->update($request->all());

        return response()->json($ar, 200);
    }

    public function delete($id)
    {
        Author::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}