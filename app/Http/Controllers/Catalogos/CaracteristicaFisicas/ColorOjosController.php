<?php

namespace App\Http\Controllers\Catalogos\CaracteristicaFisicas;

use App\Http\Controllers\Controller;
use App\Http\Requests\Catalogos\CaracteristicasFisicas\ColorOjosRequest;
use App\Models\Catalogos\CaracteristicasFisicas\ColorOjos;
use Illuminate\Http\Request;

class ColorOjosController extends Controller
{
   
    public function index()
    {
        return ColorOjos::all();
    }

    
    public function store(ColorOjosRequest $request)
    {
        return ColorOjos::create($request->all());
    }

    
    public function show($id)
    {
        return ColorOjos::findOrFail($id);
    }

    public function update( $id, ColorOjosRequest $request)
    {
        $colorojos= ColorOjos::findOrFail($id);
        return $colorojos->update($request->all());
    }

    
    public function destroy( $id)
    {
        return ColorOjos::findOrFail($id)->delete();
    }
}