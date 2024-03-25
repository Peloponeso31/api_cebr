<?php

namespace App\Http\Controllers;

use App\Models\Catalogos\Lengua;
use Illuminate\Http\Request;

class LenguaController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:buscar') ->only('index', 'show');
        $this->middleware('can:creacion') ->only('store');
        $this->middleware('can:edicion') ->only('update');
        $this->middleware('can:eliminacion') ->only('destroy');  
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Lengua::all();
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
    public function show(Lengua $lengua)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lengua $lengua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lengua $lengua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lengua $lengua)
    {
        //
    }
}
