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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
