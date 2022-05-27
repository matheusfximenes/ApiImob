<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index(Request $request) {
        $request->validate([
            'uf_id' => 'exists:uf,id'
        ]);
        return $request->has('uf_id') 
        ? response()->json(['data' => City::where('uf_id', $request->uf_id)->get()], 200) 
        : response()->json(['data' => City::all()], 200);
    }
}
