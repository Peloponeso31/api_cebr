<?php

namespace App\Http\Controllers\Catalogos;

use App\Http\Controllers\Controller;
use App\Models\Catalogos\RegionCuerpoRnpdno;
use Illuminate\Http\Request;

class RegionCuerpoRnpdnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RegionCuerpoRnpdno::all();
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RegionCuerpoRnpdno $regionCuerpoRnpdno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegionCuerpoRnpdno $regionCuerpoRnpdno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegionCuerpoRnpdno $regionCuerpoRnpdno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegionCuerpoRnpdno $regionCuerpoRnpdno)
    {
        //
    }
}
