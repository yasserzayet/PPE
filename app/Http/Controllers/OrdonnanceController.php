<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrdonnanceRequest;
use App\Ordonnance;

class OrdonnanceController extends Controller
{
    public function index()
    {
        $ordonnances = Ordonnance::all();

        return view("ordonnance/ord")->with('data',$ordonnances);
    }

    public function store(OrdonnanceRequest $request)
    {
        $ordonnance = Ordonnance::create($request->all());

        return response(['data' => $ordonnance ], 201);

    }

    public function show($id)
    {
        $ordonnance = Ordonnance::findOrFail($id);

        return response(['data', $ordonnance ], 200);
    }

    public function update(OrdonnanceRequest $request, $id)
    {
        $ordonnance = Ordonnance::findOrFail($id);
        $ordonnance->update($request->all());

        return response(['data' => $ordonnance ], 200);
    }

    public function destroy($id)
    {
        Ordonnance::destroy($id);

        $ordonnances = Ordonnance::all();

        return view("ordonnance/ord")->with('data',$ordonnances);
    }
}
