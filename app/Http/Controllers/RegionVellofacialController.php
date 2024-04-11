<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegionVellofacialRequest;
use App\Http\Requests\UpdateRegionVellofacialRequest;
use App\Models\Catalogos\MediaFiliacion\RegionVellofacial;

class RegionVellofacialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RegionVellofacial::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRegionVellofacialRequest $request)
    {
        return RegionVellofacial::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return RegionVellofacial::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegionVellofacial $regionVellofacial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, UpdateRegionVellofacialRequest $request)
    {
        $regionvello= RegionVellofacial::findOrFail($id);
        return $regiomvello->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return RegionVellofacial::findOrFail($id)->delete();
    }
}