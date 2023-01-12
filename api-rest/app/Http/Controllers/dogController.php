<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelsDog;

class dogController extends Controller
{
    public function index()
    {
        return ModelsDog::all();
    }


    public function store(Request $request)
    {
        $dogs = new ModelsDog;
        $dogs->raca = $request->raca;
        $dogs->nome = $request->nome;
        $dogs->save();

        return response()->json([
            "message" => "dog registered"
        ], 201);
    }


    public function show($id)
    {
    }

    public function update(Request $request, $id)
    {
        if (ModelsDog::where('id', $id)->exists()) {
            $resultado = ModelsDog::find($id);
            $resultado->raca = is_null($request->raca) ? $resultado->raca : $request->raca;
            $resultado->nome = is_null($request->nome) ? $resultado->nome : $request->nome;
            $resultado->save();

            return response()->json([
                "message" => "Updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Update failed"
            ], 400);
        };
    }

    public function destroy($id)
    {
        if (ModelsDog::where('id', $id)->exists()) {
            $result = ModelsDog::find($id);
            $result->delete();

            return response()->json([
                "message" => "records deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
        }
    }
}
