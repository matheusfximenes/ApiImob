<?php

namespace App\Http\Controllers;

use App\Models\PropertyOwner;
use Illuminate\Http\Request;

class PropertyOwnerController extends Controller
{

    public function index(Request $request) {
        return response()->json([
            'response' => PropertyOwner::search($request->all())
        ]);
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:property_owner,email',
            'phone' => 'required|celular_com_ddd',
            'cpf' => 'required|cpf|formato_cpf|unique:property_owner,cpf',
            'birthdate' => 'required|date_format:m-d-Y',
            'marital_status' => 'required',
            'cep' => 'required|formato_cep',
            'state' => 'required|uf',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'complement' => 'string|max:255',
            'country' => 'required|string|max:255',
            'company_id' => 'required|exists:company,id'
            
        ]);

        $propertyOwner = PropertyOwner::create($request->all());

        return response()->json([
            'message' => 'Proprietário cadastrado com sucesso.',
            'company' => $propertyOwner
        ], 200);
    }

    public function update(Request $request) {
        $request->validate([
            'id' => 'required|exists:property_owner,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|celular_com_ddd',
            'cpf' => 'required|cpf|formato_cpf',
            'birthdate' => 'required|date_format:m-d-Y',
            'marital_status' => 'required',
            'cep' => 'required|formato_cep',
            'state' => 'required|uf',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'number' => 'required|string|max:10',
            'district' => 'required|string|max:255',
            'complement' => 'string|max:255',
            'country' => 'required|string|max:255',
            'company_id' => 'required|exists:company,id'
            
        ]);

        PropertyOwner::find($request->id)->update($request->all());

        return response()->json([
            'message' => 'Proprietário atualizado com sucesso.',
            'company' => PropertyOwner::find($request->id)
        ], 200);
    }

    public function delete(Request $request) {
        $request->validate(['id' => 'required|exists:property_owner,id']);

        PropertyOwner::destroy($request->id);

        return response()->json([
            'message' => 'Proprietário excluído com sucesso.'
        ], 200);
    }
}
