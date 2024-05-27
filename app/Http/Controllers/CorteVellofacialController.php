<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCorteVellofacialRequest;
use App\Http\Requests\UpdateCorteVellofacialRequest;
use App\Models\Catalogos\MediaFiliacion\CorteVellofacial;

class CorteVellofacialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CorteVellofacial::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCorteVellofacialRequest $request)
    {
        return CorteVellofacial::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return CorteVellofacial::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateCorteVellofacialRequest $request)
    {
        $cortevello= CorteVellofacial::findOrFail($id);
        return $cortevello->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return CorteVellofacial::findOrFail($id)->delete();
    }
}
