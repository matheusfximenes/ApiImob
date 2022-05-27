<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    function index() {
        return response()->json([People::all()],200);
    }

    function create(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|cpf|formato_cpf|unique:peoples,cpf',
            'cadsus' => 'required|unique:peoples,cadsus',
            'birthdate' => 'required|date_format:m-d-Y',
            'sexo' => 'required',
            'ethnicity' => 'required',
            'uf_id' => 'required|exists:uf,id',
            'city_id' => 'required|exists:city,id',
            'mother' => 'string|max:255',
            'has_mother' => 'boolean',
            'father' => 'string|max:255',
            'has_father' => 'boolean',
        ]);

        $people = People::create($request->all());

        return response()->json([
            'message' => 'Pessoa cadastrada com sucesso.',
            'people' => $people
        ], 201);
    }
}
