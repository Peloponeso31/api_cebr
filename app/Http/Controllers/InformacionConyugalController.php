<?php

namespace App\Http\Controllers;

use App\Models\InformacionConyugal;
use Illuminate\Http\Request;

class InformacionConyugalController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return InformacionConyugal::all();
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
    public function show(InformacionConyugal $informacionConyugal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InformacionConyugal $informacionConyugal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformacionConyugal $informacionConyugal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformacionConyugal $informacionConyugal)
    {
        //
    }
}
