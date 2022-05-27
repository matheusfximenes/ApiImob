<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index(Request $request) {
        return response()->json([
            'response' => Company::search($request->all())
        ]);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|string',
            'cnpj' => 'required|cnpj|formato_cnpj|unique:company',
            'cep' => 'required|formato_cep',
            'state' => 'required|uf',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'complement' => 'string|max:255',
            'country' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $company = Company::create($request->all());

        return response()->json([
            'message' => 'Imobiliária cadastrada com sucesso.',
            'company' => $company
        ], 200);
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:company,id',
            'name' => 'required|string',
            'cnpj' => 'required|cnpj|formato_cnpj',
            'cep' => 'required|formato_cep',
            'state' => 'required|uf',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'complement' => 'string|max:255',
            'country' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        Company::find($request->id)->update($request->all());

        return response()->json([
            'message' => 'Imobiliária atualizada com sucesso.',
            'company' => Company::find($request->id)
        ], 200);
    }

    public function delete(Request $request) {
        $request->validate(['id' => 'required|integer|exists:company,id']);

        Company::destroy($request->id);
        
        return response()->json([
            'message' => 'Imobiliária excluída com sucesso.'
        ], 200);
    }
}
