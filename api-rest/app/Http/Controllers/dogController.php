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
        ModelsDog::create($request->all());
    }


    public function show($id)
    {
        return ModelsDog::find($id);
    }

    public function update(Request $request, $id)
    {
        $dog = ModelsDog::findOrFail($id);
        $dog->update($request->all());
    }

    public function destroy($id)
    {
        $dog = ModelsDog::findOrFail($id);
        $dog->destroy($id);
    }
}
