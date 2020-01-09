<?php

namespace App\Http\Controllers;

use App\Http\Requests\RdvRequest;
use App\Rdv;

class RdvController extends Controller
{
    public function index()
    {
        $rdvs = Rdv::latest()->get();

        return response(['data' => $rdvs ], 200);
    }

    public function store(RdvRequest $request)
    {
        $rdv = Rdv::create($request->all());

        return response(['data' => $rdv ], 201);

    }

    public function show($id)
    {
        $rdv = Rdv::findOrFail($id);

        return response(['data', $rdv ], 200);
    }

    public function update(RdvRequest $request, $id)
    {
        $rdv = Rdv::findOrFail($id);
        $rdv->update($request->all());

        return response(['data' => $rdv ], 200);
    }

    public function destroy($id)
    {
        Rdv::destroy($id);

        return response(['data' => null ], 204);
    }
}
